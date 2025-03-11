<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - BiSport</title>
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
    </ul>
</nav>

<!-- ✅ Section ADMIN -->
<section class="admin-container">
    <h2>Liste des Réservations</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Terrain</th>
            <th>Date</th>
            <th>Heure</th>
        </tr>

        <?php
        $file = 'data/reservations.txt';
        if (file_exists($file)) {
            $reservations = file($file);
            foreach ($reservations as $reservation) {
                list($nom, $email, $terrain, $date, $heure) = explode('|', trim($reservation));
                echo "<tr><td>$nom</td><td>$email</td><td>$terrain</td><td>$date</td><td>$heure</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Aucune réservation pour le moment.</td></tr>";
        }
        ?>
   
