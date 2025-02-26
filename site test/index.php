<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiSport - Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">
        <img src="assets/logo.png" alt="BiSport">
    </div>
    <button id="menu-toggle">MENU</button>
</header>

<!-- Dégradé entre la bande noire et la vidéo -->
<div class="header-gradient"></div>

<!-- Menu déroulant -->
<nav id="menu">
    <ul>
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="stade.php">STADES</a></li>
        <li><a href="gymnase.php">GYMNASE</a></li>
        <li><a href="piscine.php">PISCINE</a></li>
        <li><a href="#contact">CONTACT</a></li>
    </ul>
</nav>

<!-- Section vidéo en arrière-plan -->
<section class="hero">
    <video autoplay muted loop id="background-video">
        <source src="assets/background.mp4" type="video/mp4">
        Votre navigateur ne supporte pas les vidéos.
    </video>
    <div class="overlay"></div>
    <div class="hero-content">
        <h1 class="futuristic-text">LOCATION DE STADE</h1>
        <a href="stade.php" class="reservation-btn">RÉSERVATION</a>
    </div>
</section>

<script src="script.js"></script>

</body>
</html>
