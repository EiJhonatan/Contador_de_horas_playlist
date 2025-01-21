<?php

// Extrai o ID da playlist do link fornecido
function extractPlaylistId($url) {
    parse_str(parse_url($url, PHP_URL_QUERY), $params);
    return $params['list'] ?? null;
}

// Recupera os IDs de todos os vídeos na playlist
function getPlaylistVideos($playlistId, $apiKey) {
    $videoIds = [];
    $apiUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails&maxResults=50&playlistId=$playlistId&key=$apiKey";
    do {
        $response = json_decode(file_get_contents($apiUrl), true);

        if (isset($response['items'])) {
            foreach ($response['items'] as $item) {
                $videoIds[] = $item['contentDetails']['videoId'];
            }
        }

        $nextPageToken = $response['nextPageToken'] ?? null;
        if ($nextPageToken) {
            $apiUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails&maxResults=50&playlistId=$playlistId&key=$apiKey&pageToken=$nextPageToken";
        }
    } while ($nextPageToken);

    return $videoIds;
}

// Recupera as durações dos vídeos e calcula a duração total
function getVideoDurations($videoIds, $apiKey) {
    $totalDuration = new DateInterval('PT0S');
    $chunks = array_chunk($videoIds, 50); // Dividir IDs em blocos de 50

    foreach ($chunks as $chunk) {
        $ids = implode(',', $chunk);
        $apiUrl = "https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$ids&key=$apiKey";
        $response = json_decode(file_get_contents($apiUrl), true);

        foreach ($response['items'] as $video) {
            if (isset($video['contentDetails']['duration'])) {
                try {
                    $duration = new DateInterval($video['contentDetails']['duration']);
                    $totalDuration = addIntervals($totalDuration, $duration);
                } catch (Exception $e) {
                    // Log ou ignore o erro de duração inválida
                }
            } else {
                // Log ou tratar vídeos sem duração
                error_log("Vídeo sem duração: " . $video['id']);
            }
        }
    }

    return $totalDuration;
}

// Soma dois objetos DateInterval
function addIntervals($interval1, $interval2) {
    $start = new DateTime('@0');
    $end = clone $start;
    $end = $end->add($interval1)->add($interval2);
    return $start->diff($end);
}

// Formata o objeto DateInterval em horas, minutos e segundos
function formatInterval($interval) {
    return $interval->h . ' horas, ' . $interval->i . ' minutos, ' . $interval->s . ' segundos';
}
