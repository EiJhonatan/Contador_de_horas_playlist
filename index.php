<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Playlist</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/imgs/Fenix.ico" type="image/x-icon">
</head>
<body>
<section class="container-ads">
            <div class="ad-description">
                <p>Publicidade</p>
                <div id="container-3237619219b6abf3aca9ad55e61ef9c3"></div>
            </div>
        </section>
    <div class="center-box">
    <img src="/imgs/Fenix.gif" alt="" srcset="" class="img-felix">
        <header>
            <h1>Contador de Playlist</h1>
            <h1>Fênix</h1>
            
            <p>Descubra a duração total da sua playlist!</p>
        </header>
        <main>
            <form method="post">
                <input 
                    type="text" 
                    name="playlist" 
                    placeholder="Cole o link da playlist aqui..." 
                    required>
                <button type="submit">Calcular Duração</button>
            </form>

            <div class="result">
                <?php
                require_once 'functions.php';
                $config = require 'config.php';
                $apiKey = $config['api_key'];

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $playlistUrl = $_POST['playlist'];
                    $playlistId = extractPlaylistId($playlistUrl);

                    if ($playlistId) {
                        $videoIds = getPlaylistVideos($playlistId, $apiKey);
                        $totalDuration = getVideoDurations($videoIds, $apiKey);

                        echo "<h2>Resultado:</h2>";
                        echo "<p><strong>Quantidade de vídeos:</strong> " . count($videoIds) . "</p>";
                        echo "<p><strong>Duração total:</strong> " . formatInterval($totalDuration) . "</p>";
                    } else {
                        echo "<p class='error'>URL da playlist inválida. Tente novamente.</p>";
                    }
                }
                ?>
            </div>
            
        </main>
    </div>
    <footer>
      <p>Desenvolvido por <a href="https://www.youtube.com/@EiJhonatan?sub_confirmation=1
" target="_blank">Ei Jhonatan</a>.</p>
      <p>&copy; 2025 Ei Jhonatan.</p>
    </footer>
    <script async="async" data-cfasync="false" src="//disappearsurgery.com/3237619219b6abf3aca9ad55e61ef9c3/invoke.js"></script>
</body>
</html>
