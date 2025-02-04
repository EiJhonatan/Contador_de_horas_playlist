<?php include 'lang.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Política de Privacidade e Termos de Uso do Contador de Playlist Fênix">
    <meta name="keywords" content="Política de Privacidade, Termos de Uso, Contador de Playlist Fênix">
    <meta name="author" content="Contador de Playlist Fênix">
     <title><?= $texts['politica']['title'] ?></title>
    <link rel="stylesheet" href="/styles/politica.css">
    <link rel="shortcut icon" href="imgs/Fenix.ico" type="image/x-icon">
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
