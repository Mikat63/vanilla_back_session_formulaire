<?php
$dateFebruary = mktime(0, 0, 0, 2, 1, 2016);
$numberDaysFebruary = date("t", $dateFebruary);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 8 - Exercice 8</title>
</head>

<body>

    <header>
        <h1>PHP partie 9 - Exercice 8</h1>
    </header>

    <main>
        <div class="date_container">
            <?php echo "<p>Bonjour, le mois de février 2016 comportait $numberDaysFebruary jours.</p>"; ?>
        </div>
    </main>
</body>

</html>