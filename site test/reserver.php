<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réserver - BiSport</title>
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
        <li><a href="admin.php">ADMIN</a></li>
    </ul>
</nav>

<section class="form-container">
    <h2>Réserver un terrain</h2>

    <?php
        $terrainSelectionne = isset($_GET['terrain']) ? htmlspecialchars($_GET['terrain']) : "";
    ?>

    <form action="traitement.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <label for="email">Email :</label>
        <input type="email" name="email" required>

        <label for="terrain">Terrain :</label>
        <select name="terrain" required>
            <option value="Camp Nou" <?= ($terrainSelectionne == "Camp Nou") ? "selected" : "" ?>>Camp Nou</option>
            <option value="Old Trafford" <?= ($terrainSelectionne == "Old Trafford") ? "selected" : "" ?>>Old Trafford</option>
            <option value="Santiago Bernabeu" <?= ($terrainSelectionne == "Santiago Bernabeu") ? "selected" : "" ?>>Santiago Bernabéu</option>
            <option value="Allianz Arena" <?= ($terrainSelectionne == "Allianz Arena") ? "selected" : "" ?>>Allianz Arena</option>
        </select>

        <label for="date">Date :</label>
        <input type="date" name="date" required>

        <label for="heure">Heure :</label>
        <input type="time" name="heure" required>

        <button type="submit">Réserver</button>
    </form>
</section>

<script src="script.js"></script>

</body>
</html>
