<?php include 'server_data.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - Stade de Soccer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Stade de Soccer</h1>
        <a href="index.php" class="btn">Retour</a>
    </header>

    <section>
        <img src="assets/soccer.jpg" alt="Terrain de Soccer" class="full-width">
        <h2>Réservez votre créneau</h2>

        <?php foreach ($creneaux as $creneau) : ?>
            <?php if ($creneau['type'] === 'soccer') : ?>
                <div class="creneau">
                    <p><strong><?= $creneau['date'] ?></strong></p>
                    <form action="reserver.php" method="POST">
                        <input type="hidden" name="creneau_id" value="<?= $creneau['id'] ?>">
                        <button type="submit">Réserver</button>
                    </form>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
</body>
</html>
