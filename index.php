<?php include 'lang.php'; ?>
<!DOCTYPE html>
<html lang="<?= $lang?>">
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1376008327261567"
    crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Calcule rapidamente a duração total de qualquer playlist do YouTube. Basta inserir o link e descobrir o tempo total de reprodução e a quantidade de vídeos.">
    <meta name="author" content="Ei Jhonatan">
    <meta name="robots" content="index, follow">

    <!-- Open Graph (Facebook, WhatsApp) -->
    <meta property="og:title" content="Calculadora de Duração de Playlist do YouTube - Contador Fênix">
    <meta property="og:description" content="Insira o link da sua playlist do YouTube e descubra sua duração total e quantidade de vídeos de forma rápida e fácil.">
    <meta property="og:image" content="https://contadorplaylistfenix.com/imgs/PREVIEW-web.png">
    <meta property="og:url" content="https://contadorplaylistfenix.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Calculadora de Duração de Playlist do YouTube - Contador Fênix">
    <meta name="twitter:description" content="Descubra a duração total de qualquer playlist do YouTube com apenas um clique.">
    <meta name="twitter:image" content="https://contadorplaylistfenix.com/imgs/PREVIEW-web.png">

    <meta name="google-site-verification" content="1wHQFCvkaTLmEYO7U5MNhm3HhPvr9SrcobFMBtpQ5J4" />

    <title><?= $texts['home']['title']?> | Contador de Playlist Fênix</title>
    <link rel="stylesheet" href="/styles/style.css?v=2">
    <link rel="shortcut icon" href="/imgs/Fenix.ico" type="image/x-icon">
    <link rel="canonical" href="https://contadorplaylistfenix.com/" />

</head>
<body>

<header>
    <nav class="navbar">
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar">☰</span>
           
        </div>
        <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php"><?= $texts['home']['menu_about'] ?></a></li>
            <li><a href="contato.php"><?= $texts['home']['menu_contact'] ?></a></li>
            <li><a href="Apoie.php"><?= $texts['home']['menu_support'] ?></a></li>
            <li><a href="politica.php"><?= $texts['home']['menu_terms'] ?></a></li>
        </ul>
    </nav>
</header>

<section class="Apoie">
    <h2><?= $texts['global']['donate_message'] ?></h2>
    <h3><?= $texts['global']['donate_info'] ?></h3>
    <p><?= $texts['global']['donate_help'] ?></p>
    <a href="Apoie.php" class="btn"><?= $texts['global']['donate_button'] ?></a>
</section>
    <div class="center-box">
  
        
    <br>
   <img src="/imgs/Fenix.gif" alt="Animação do Fênix representando o contador de playlists" class="img-felix" loading="lazy">
        <header>
        <h1><?= $texts['home']['title'] ?></h1>
        <p><?= $texts['home']['description'] ?></p>
            
        </header>
        <main>
            <form method="post">
            <input 
                type="text" 
                name="playlist" 
                placeholder="<?= $texts['home']['placeholder'] ?>"
                required>
            <button type="submit"><?= $texts['home']['button'] ?></button>
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
                        echo "<p><strong>Quantidade de vídeos: </strong> " . count($videoIds) . "</p>";
                        echo "<p><strong>Duração total:</strong> " . formatInterval($totalDuration) . "</p>";
                        echo "<br>";
                        echo "<h2>Result:</h2>";
                        echo "<p><strong>Number of videos: </strong> " . count($videoIds) . "</p>";
                        echo "<p><strong>Total duration: </strong> " . formatIntervalUS($totalDuration) . "</p>";
                    } else {
                        echo "<p class='error'>URL da playlist inválida. Tente novamente.</p>";
                        echo "<p class='error'>Invalid playlist URL. Please try again.</p>";
                    }
                }
                ?>
            </div>
            
        </main>
    </div>

    <div class="center-box" id="faq">
        <h1><?= $texts['faq']['title'] ?></h1>

        <?php foreach ($texts['faq']['questions'] as $key => $faq) : ?>
        <div class="faq">
            <h2><?= $faq['question'] ?></h2>
            <p><?= $faq['answer'] ?></p>
        </div>
        <?php endforeach; ?>

    </div>

    <div class="tutorial" id="tutorial">
        <h2>Como usar o site?</h2>
        <p>Veja o vídeo rápido explicando como funciona:</p>
        <div class="video-container" onclick="loadVideo()">
            <img 
                src="https://img.youtube.com/vi/KcNNKXFywdQ/maxresdefault.jpg" 
                alt="Miniatura do vídeo" 
                class="video-thumbnail">
            <button class="play-button">▶ Assistir</button>
        </div>
    </div>

    <footer>
    <p><?= $texts['global']['footer'] ?><a href="https://www.youtube.com/@EiJhonatan" target="_blank">Ei Jhonatan</a></p>
    <a href="/politica.php"><?= $texts['global']['privacy'] ?></a>
    <p>&copy; 2025</p>
    </footer>
    <script src="scripts/play.js"></script>
    <script src="scripts/menu.js"></script>
</body>
</html>
