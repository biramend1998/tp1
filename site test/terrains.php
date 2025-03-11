<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terrains - BiSport</title>
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
        <li><a href="reserver.php">RÉSERVATION</a></li>
        <li><a href="admin.php">ADMIN</a></li>
    </ul>
</nav>

<!-- ✅ Bannière des terrains -->
<section class="terrain-banner">
    <h1 class="futuristic-text">TERRAINS</h1>
</section>

<!-- ✅ Présentation des terrains -->
<section class="terrain-description">
    <div class="terrain-text">
        <h2>LOCATION DE TERRAINS</h2>
        <p>Nous sommes fiers de vous proposer quatre terrains de soccer de haute qualité, idéaux pour des matchs en petits groupes de 3 contre 3 ou 4 contre 4. Chaque terrain est conçu pour enrichir votre expérience de jeu.</p>
        <ul>
            <li><b>Camp Nou :</b> Terrain moderne avec pelouse synthétique.</li>
            <li><b>Old Trafford :</b> Parfait pour les tournois amateurs et professionnels.</li>
            <li><b>Santiago Bernabeu :</b> Équipement dernier cri avec tribunes.</li>
            <li><b>Allianz Arena :</b> Idéal pour des événements et entraînements.</li>
        </ul>
    </div>
    <div class="terrain-image">
        <img src="assets/stadium_placeholder.jpg" alt="Terrains">
    </div>
</section>

<!-- ✅ Liste des stades -->
<section class="stadium-list">
    <h2>CHOISISSEZ VOTRE TERRAIN</h2>
    <div class="stadiums">
        <div class="stadium">
            <img src="assets/camp_nou.jpg" alt="Camp Nou">
            <p>Camp Nou</p>
        </div>
        <div class="stadium">
            <img src="assets/old_trafford.jpg" alt="Old Trafford">
            <p>Old Trafford</p>
        </div>
        <div class="stadium">
            <img src="assets/santiago_bernabeu.jpg" alt="Santiago Bernabeu">
            <p>Santiago Bernabeu</p>
        </div>
        <div class="stadium">
            <img src="assets/allianz_arena.jpg" alt="Allianz Arena">
            <p>Allianz Arena</p>
        </div>
    </div>
</section>

<!-- ✅ Bouton de réservation -->
<div class="reservation-btn-container">
    <a href="reserver.php" class="reservation-btn">RÉSERVER MAINTENANT</a>
</div>

<script src="script.js"></script>

</body>
</html>
