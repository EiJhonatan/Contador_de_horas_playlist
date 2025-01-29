<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Playlist</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/imgs/Fenix.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubra a duração total de qualquer playlist do YouTube. Insira o link da playlist e obtenha o tempo total de reprodução e a quantidade de vídeos.">
    <meta name="keywords" content="YouTube, playlist, calculadora de duração, duração total de vídeos, contador de vídeos, ferramentas online,Contador de Playlist,Fênix,contador de playlist youtube">
    <meta name="author" content="Ei Jhonatan">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph (para redes sociais como Facebook) -->
    <meta property="og:title" content="Calculadora de Duração de Playlist do YouTube">
    <meta property="og:description" content="Insira o link da sua playlist e descubra sua duração total e quantidade de vídeos de forma rápida e fácil.">
    <meta property="og:image" content="https://contadorplaylistfenix.com/imgs/PREVIEW-web.png">
    <meta property="og:url" content="https://contadorplaylistfenix.com/">
    <meta property="og:type" content="website">
    <title>Contador de Playlist</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="shortcut icon" href="/imgs/Fenix.ico" type="image/x-icon">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1376008327261567"
     crossorigin="anonymous"></script>     
</head>
<body>
<section class="container-ads">
            <div class="ad-description">
                <p>Publicidade</p>
                <div class="ads" id="container-3237619219b6abf3aca9ad55e61ef9c3"></div>
            </div>
</section>
<section class="Apoie">
    <h2>Curtiu nosso site?</h2>
    <h3>Doe via Pix ou PayPal</h3>
    <p>Se você quiser nos ajudar, qualquer valor é muito bem-vindo!</p>
    <a href="Apoie.html" class="btn">apoie aqui</a>
</section>
    <div class="center-box">
        <a href="/faq.html" class="faq-page">FAQs (Perguntas Frequentes)</a>
        
    <br>
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
      <p>Desenvolvido por <a href="https://www.youtube.com/@EiJhonatan?sub_confirmation=1" target="_blank">Ei Jhonatan</a>.</p>
      <a href="/politica.html" class="faq-page">Política de Privacidade e Termos de Uso</a>
      <p>&copy; 2025</p>
    </footer>
    <script async="async" data-cfasync="false" src="//disappearsurgery.com/3237619219b6abf3aca9ad55e61ef9c3/invoke.js"></script>
    <script src="scripts/adblock.js"></script>
</body>
</html>
