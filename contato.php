<?php include 'lang.php'; ?>
<!DOCTYPE html>
<html lang="<?= $lang?>">
<head >
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="1wHQFCvkaTLmEYO7U5MNhm3HhPvr9SrcobFMBtpQ5J4" />
  
  <title><?= $texts ['contato']['title_Contato']?> | Contador de Playlist Fênix</title>
  <link rel="stylesheet" href="styles/apoie.css">
  <link rel="shortcut icon" href="/imgs/Fenix.ico" type="image/x-icon">
</head>
<body>
  <div class="container">
    <a href="/index.php" class="btn-voltar">⬅ Voltar</a>
    
    <h1><?= $texts ['contato']['h1_Contato']?></h1>
    <p><?= $texts ['contato']['Contato_message']?></p>
    <img src="/imgs/Fenix.gif" alt="Animação do Fênix representando o contador de playlists" class="img-felix" loading="lazy">
    <p><?= $texts ['contato']['p_message']?></p>
    <p><strong>Email:</strong> <a href="mailto:suporte@contadorplaylistfenix.com">suporte@contadorplaylistfenix.com</a></p>
    <h2><?= $texts ['contato']['h2_Sobre']?></h2>
    <p><?= $texts['contato']['Sobre_message'] ?></p>
    <p><?= $texts['contato']['tipo'] ?><?= $texts['global']['footer'] ?><a href="https://www.youtube.com/@EiJhonatan" target="_blank">Ei Jhonatan</a></p>
    <p><?= $texts['contato']['info_faq'] ?></p>
  </div>
  <footer>
    <a href="/politica.php" class="faq-page"><?= $texts ['global']['privacy']?></a>
    <p>&copy; 2025</p>
  </footer>
</body>
</html>
