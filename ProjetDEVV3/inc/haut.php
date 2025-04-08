<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<?php define("ROOT", '/PROJETDEV/'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROJETV</title>
  <link rel="icon" type="image/png" href="<?= ROOT ?>images/eaagle.png">
  <link rel="stylesheet" href="<?= ROOT ?>CSS/style.css">
  <link rel="stylesheet" href="<?= ROOT ?>CSS/mobile.css">
  <link rel="stylesheet" href="<?= ROOT ?>CSS/page.css">
</head>

<body>

<header>
  <h1>
    <a href="<?= ROOT ?>index.php">
      <img src="<?= ROOT ?>images/eaagle.png" alt="logo aigle">
      B1CS.WALLET
    </a>
  </h1>
  <img src="<?= ROOT ?>images/efree.png" alt="">

  <div class="headerr">

    <div class="search1">
      <img src="<?= ROOT ?>images/search(1).svg" alt="Rechercher" id="searchIcon">
    </div>

    <div class="search-box" id="searchBox">
      <form action="<?= ROOT ?>pages/traitement.php" method="get">
        <input type="text" maxlength="100" placeholder="Rechercher..." name="recherche" />
        <button type="submit"><img src="<?= ROOT ?>images/search(1).svg" alt=""></button>
        <button type="button" id="closeSearch">Annuler</button>
      </form>
    </div>
    <?php if (isset($_SESSION['utilisateur']) && isset($_SESSION['nom'])): ?>
      <p class="bonjour-user">Bonjour <?= $_SESSION['utilisateur'] . ' ' . $_SESSION['nom'] ?> 👋</p>
      <a href="<?= ROOT ?>page/logout.php" class="pulse">SE DÉCONNECTER</a>
    <?php else: ?>
      <a href="<?= ROOT ?>page/login.php" class="pulse">SE CONNECTER</a>
    <?php endif; ?>

    <div class="dlll">
      <img src="<?= ROOT ?>images/download(4).svg" alt="download">
      <div class="qr-popup">
        <img src="<?= ROOT ?>images/qr.svg" alt="QR Code">
        <p>Scannez pour télécharger l’appli iOS<br>et Android</p>
        <br>
        <a href="">Plus d’options de téléchargement</a>
      </div>
    </div>

    <div class="langues">
      <img src="<?= ROOT ?>images/globe(1).svg" id="langue" alt="langue">
      <div class="popuplangue" id="popLangue">
        <h2>Langue</h2>
        <br>
        <h3>Suggestions pour vous :</h3>
        <br>
        <a href="">Français FR</a>
        <h3>Les langues :</h3>
        <br>
        <a href="">English EN</a>
        <a href="">Français FR</a>
      </div>
    </div>
    <div class="moon">
      <img src="<?= ROOT ?>images/moon.svg" id="theme" alt="mode jour ou nuit">
    </div>

  </div>
</header>

<nav>
  <img src="<?= ROOT ?>images/align-justify.svg" alt="menu responsive" id="menunav">
  <ul id="menulink">
    <li><a href="<?= ROOT ?>index.php">🏠 Accueil</a></li>
    <li>
      <a>📚 Apprendre</a>
      <ul>
        <li><a href="<?= ROOT ?>page/tuto.php">💡 Tuto Crypto</a></li>
      </ul>
    </li>
    <li>
      <a>🌍 Découvrir</a>
      <ul>
        <li><a href="<?= ROOT ?>page/presentation.php">🎓 Présentation du projet</a></li>
      </ul>
    </li>
    <li>
      <a>ℹ️ À propos de nous</a>
      <ul>
        <li><a href="<?= ROOT ?>page/misson.php">❓ Notre mission</a></li>
        <li><a href="<?= ROOT ?>page/equipe.php">👨‍💻 L’équipe</a></li>
        <li><a href="<?= ROOT ?>page/contact.php">📩 Contact</a></li>
      </ul>
    </li>
  </ul>
</nav>
