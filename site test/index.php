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

<div class="header-gradient"></div>
<nav id="menu">
    <ul>
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="terrains.php">NOS STADES</a></li>
        <li><a href="reserver.php">RÉSERVATION</a></li>
        <li><a href="admin.php">ADMIN</a></li> <!-- ✅ Ajout du bouton ADMIN -->
    </ul>
</nav>


<!-- Section vidéo -->
<section class="hero">
    <video autoplay muted loop id="background-video">
        <source src="assets/background.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>
    <div class="overlay"></div>
    <div class="hero-content">
        <h1 class="futuristic-text">LOCATION DE STADE</h1>
        <a href="reserver.php" class="reservation-btn">RÉSERVATION</a>
    </div>
</section>

<!-- Section À PROPOS -->
<!-- Section À PROPOS -->
<!-- Section À PROPOS -->
<section class="about">
    <div class="about-title">
        <h2><span class="red-text">BIENVENUE CHEZ BISPORT</span><br>À PROPOS</h2>
        <img src="assets/barre.png" alt="Décoration" class="about-image">
    </div>
    <div class="about-container">
        <div class="about-text">
            <p>
                Bienvenue chez BiSport, la plateforme idéale pour réserver des terrains de soccer de qualité. 
                Notre mission est de fournir aux amateurs et professionnels du football un accès simplifié aux 
                meilleures infrastructures sportives.
            </p>
        </div>
        <div class="about-text">
            <p>
                Avec BiSport, vous avez la possibilité de jouer dans des stades emblématiques comme le Camp Nou, 
                Old Trafford, Santiago Bernabéu et l'Allianz Arena. Que vous soyez un passionné ou un club 
                à la recherche d'un terrain, nous avons ce qu'il vous faut !
            </p>
        </div>
    </div>
</section>


<!-- Section avec les 4 stades -->
<div class="stadium-section">
    <div class="stadium-images">
        <img src="assets/camp_nou.jpg" alt="Camp Nou">
        <img src="assets/old_trafford.jpg" alt="Old Trafford">
        <img src="assets/santiago_bernabeu.jpg" alt="Santiago Bernabéu">
        <img src="assets/allianz_arena.jpg" alt="Allianz Arena">
    </div>
</div>

<!-- Section accompagnements -->
<section class="accompaniments">
    <h2>LES SERVICES DISPONIBLES</h2>
    <div class="services-container">
        <div class="service">
            <h3>Vestiaires équipés</h3>
            <p>Accès à des vestiaires modernes avec douches et casiers sécurisés.</p>
        </div>
        <div class="service">
            <h3>Éclairage nocturne</h3>
            <p>Jouez en soirée grâce à notre éclairage de haute qualité.</p>
        </div>
        <div class="service">
            <h3>Arbitrage professionnel</h3>
            <p>Bénéficiez d'un arbitrage officiel pour vos matchs.</p>
        </div>
        <div class="service">
            <h3>Restauration sur place</h3>
            <p>Profitez d'un snack et boissons énergétiques après votre match.</p>
        </div>
    </div>
</section>

<!-- Section partenaires -->
<section class="partners">
    <h2>NOS PARTENAIRES</h2>
    <div class="partners-logos">
        <img src="assets/partner1.png" alt="Partenaire 1">
        <img src="assets/partner2.png" alt="Partenaire 2">
        <img src="assets/partner3.png" alt="Partenaire 3">
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="contact">
        <h2>CONTACTEZ-NOUS</h2>
        <p>Email : info@bisport.com</p>
        <p>Téléphone : 06 12 34 56 78</p>
        <p>Adresse : 123 Avenue du Sport, Paris</p>
    </div>
    <div class="footer-logo">
        <img src="assets/logo.png" alt="BiSport">
    </div>
</footer>

<script src="script.js"></script>

</body>
</html>
