<?php include 'lang.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Apoie o Contador de Playlist Fênix com doações via Pix ou PayPal e ajude a manter o projeto ativo. Contribua e faça parte da nossa comunidade!">
  
  <meta property="og:title" content="<?= $texts['doacao']['title'] ?> | Contador de Playlist Fênix">
  <meta property="og:description" content="Apoie o Contador de Playlist Fênix com doações via Pix ou PayPal e ajude a manter o projeto ativo.">
  <meta property="og:image" content="https://contadorplaylistfenix.com/imgs/qrcode-pix.png">
  <meta property="og:url" content="https://contadorplaylistfenix.com/Apoie.php">
  
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= $texts['doacao']['title'] ?> | Contador de Playlist Fênix">
  <meta name="twitter:description" content="Ajude a manter o Contador de Playlist Fênix com uma doação via Pix ou PayPal.">
  <meta name="twitter:image" content="https://seusite.com/imgs/qrcode-pix.png">

  <title><?= $texts['doacao']['title'] ?> | Contador de Playlist Fênix</title>
  <link rel="stylesheet" href="styles/apoie.css">
  <link rel="shortcut icon" href="/imgs/Fenix.ico" type="image/x-icon">
</head>
<body>
  <div class="container">
    <a href="/index.php" class="btn-voltar">⬅ Voltar</a>
    <h1><?= $texts['doacao']['header'] ?></h1>
    <p><?= $texts['doacao']['description'] ?></p>

    <div class="doacao-pix">
      <h2><?= $texts['doacao']['pix_donation']['title'] ?></h2>
      <img src="imgs/qrcode-pix.png" class="img-qr-code" alt="QR Code Pix"onclick="copiarCodigoPix()">
      <p><?= $texts['doacao']['pix_donation']['scan_instruction'] ?></p>
      <button class="btn-copiar" onclick="copiarCodigoPix()"><?= $texts['doacao']['pix_donation']['copy_button_text'] ?></button>
    </div>
    

    <div class="doacao-paypal">
      <h2><?= $texts['doacao']['paypal_donation']['title'] ?></p>
      <p><?= $texts['doacao']['paypal_donation']['description'] ?></p>
      <a href="https://www.paypal.com/donate?business=devjhow2003@gmail.com" target="_blank" class="btn-paypal">
        <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_150x38.png" alt="Doar com PayPal">
      </a>
    </div>
  </div>
  <footer>
    <a href="/politica.php" class="faq-page"><?= $texts ['global']['privacy']?></a>
    <p>&copy; 2025</p>
  </footer>
  <script src="scripts/copiar.js"></script>
</body>
</html>
