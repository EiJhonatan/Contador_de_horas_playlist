<?php include 'lang.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conheça a Política de Privacidade e os Termos de Uso do Contador de Playlist Fênix. Saiba como protegemos seus dados e garantimos a melhor experiência.">
    <meta name="keywords" content="Política de Privacidade, Termos de Uso, Contador de Playlist Fênix">
    <meta name="author" content="Contador de Playlist Fênix">
    <meta name="robots" content="index, follow">
     <title><?= $texts['politica']['title'] ?> | Contador de Playlist Fênix</title>
    <link rel="stylesheet" href="/styles/politica.css">
    <link rel="shortcut icon" href="imgs/Fenix.ico" type="image/x-icon">
    
    <meta property="og:title" content="<?= $texts['politica']['title'] ?> | Contador de Playlist Fênix">
    <meta property="og:description" content="Confira nossa Política de Privacidade e Termos de Uso e saiba como garantimos sua segurança.">
    <meta property="og:image" content="https://contadorplaylistfenix.com/imgs/PREVIEW-web.png">
    <meta property="og:url" content="https://contadorplaylistfenix.com/politica.php">
    <meta property="og:type" content="website">
    
    <meta name="twitter:title" content="<?= $texts['politica']['title'] ?> | Contador de Playlist Fênix">
    <meta name="twitter:description" content="Confira nossa Política de Privacidade e Termos de Uso e saiba como garantimos sua segurança.">
    <meta name="twitter:image" content="https://contadorplaylistfenix.com/imgs/PREVIEW-web.png">
    
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="shortcut icon" href="/imgs/Fenix.ico" type="image/x-icon">
    <meta name="google-site-verification" content="1wHQFCvkaTLmEYO7U5MNhm3HhPvr9SrcobFMBtpQ5J4" />
</head>
<body>
    
    <div class="container">
        <a href="index.php" class="Btn-Volta"><?= $texts['politica']['back_button'] ?></a>
        <h1><?= $texts['politica']['title'] ?></h1>

        <div class="section">
    <h2><?= $texts['politica']['privacy_policy']['title'] ?></h2>
    <?php foreach ($texts['politica']['privacy_policy']['content'] as $paragraph): ?>
        <p><?= $paragraph ?></p>
    <?php endforeach; ?>
</div>


<div class="section">
    <h2><?= $texts['politica']['terms_of_use']['title'] ?></h2>
    <?php foreach ($texts['politica']['terms_of_use']['content'] as $paragraph): ?>
        <p><?= $paragraph ?></p>
    <?php endforeach; ?>
</div>

    </div>
    <footer>
    <p><?= $texts['global']['footer'] ?><a href="https://www.youtube.com/@EiJhonatan" target="_blank">Ei Jhonatan</a></p>
    <p>&copy; 2025</p>
    </footer>
</body>
</html>
