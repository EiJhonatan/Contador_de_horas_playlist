<?php include 'lang.php'; ?>
<!DOCTYPE html>
<html lang="<?= $lang?>">
<head >
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="1wHQFCvkaTLmEYO7U5MNhm3HhPvr9SrcobFMBtpQ5J4" />

  <title><?= $texts['contato']['h2_title'] ?> | Contador de Playlist Fênix</title>
  <link rel="stylesheet" href="styles/about.css">
  <link rel="shortcut icon" href="/imgs/Fenix.ico" type="image/x-icon">
</head>
<body>
  <div class="container">
  <a href="/index.php" class="btn-voltar">⬅ Voltar</a>
  <header>
  <h1><?= $texts['contato']['h2_Sobre'] ?></h1>
        <nav class="indice">
            <ul>
                <li><a href="#introducao"><?= $texts['indice']['introducao'] ?></a></li>
                <li><a href="#como-funciona"><?= $texts['indice']['como-funciona'] ?></a></li>
                <li><a href="#beneficios"><?= $texts['indice']['beneficios'] ?></a></li>
                <li><a href="#feedback"><?= $texts['indice']['feedback'] ?></a></li>
                <li><a href="#conclusao"><?= $texts['indice']['conclusao'] ?></a></li>
            </ul>
        </nav>
    </header>

    <section id="introducao">
        <h2><?= $texts['Introdução']['h2_introducao'] ?></h2>
        <p><?= $texts['Introdução']['introducao_message'] ?></p>
        <p><?= $texts['Introdução']['introducao_message2'] ?></p>
    </section>

    <section class="como-funciona" id="como-funciona">
        <h2><?= $texts['como-funciona']['h2_funciona'] ?></h2>
        <p><?= $texts['como-funciona']['funciona_message'] ?></p>
        <ol>
            <?php foreach ($texts['como-funciona']['ol_message'] as $item): ?>
            <li><?= $item ?></li>
            <?php endforeach; ?>
        </ol>
    </section>

    <section class="beneficios" id="beneficios">
        <h2>Benefícios do ContadorPlaylistFenix</h2>
        <ul>
            <?php foreach ($texts['beneficios']['ol_message'] as $item): ?>
            <p><?= $item ?></p>
             <?php endforeach; ?>
        </ul>
    </section>


    <section id="feedback">
        <h2><?= $texts['feedback']['h2_funciona'] ?></h2>
            <?php foreach ($texts['feedback']['ol_message'] as $message): ?>
            <p><?= $message ?></p>
             <?php endforeach; ?>
    </section>

    <section id="conclusao">
    <h2><?= $texts['conclusao']['h2_funciona'] ?></h2>
    <?php foreach ($texts['conclusao']['ol_message'] as $message): ?>
        <p><?= html_entity_decode($message) ?></p>
    <?php endforeach; ?>
</section>

  </div>
  <footer>
    <a href="/politica.php" class="faq-page"><?= $texts ['global']['privacy']?></a>
    <p>&copy; 2025</p>
  </footer>
</body>
</html>
