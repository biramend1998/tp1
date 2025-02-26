<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $creneau_id = $_POST["creneau_id"];
    echo "<h2>Réservation confirmée !</h2>";
    echo "<p>Votre réservation pour le créneau #$creneau_id a été prise en compte.</p>";
    echo "<a href='index.php'>Retour</a>";
}
?>
