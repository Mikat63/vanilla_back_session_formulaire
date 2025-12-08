<?php
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$dateInTwentyDays = new DateTime('+20 days');
$convertInFrenchDate = $formatter->format($dateInTwentyDays);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 8 - Exercice 7</title>
</head>

<body>

    <header>
        <h1>PHP partie 9 - Exercice 7</h1>
    </header>

    <main>
        <div class="date_container">
            <?php echo "<p>Bonjour, dans 20 jours nous seront le $convertInFrenchDate.</p>"; ?>
        </div>
    </main>
</body>

</html>