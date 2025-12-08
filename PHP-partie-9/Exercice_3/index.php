<?php
$jours_fr = [
    'Monday' => 'lundi',
    'Tuesday' => 'mardi',
    'Wednesday' => 'mercredi',
    'Thursday' => 'jeudi',
    'Friday' => 'vendredi',
    'Saturday' => 'samedi',
    'Sunday' => 'dimanche'
];

$mois_fr = [
    'January' => 'janvier',
    'February' => 'février',
    'March' => 'mars',
    'April' => 'avril',
    'May' => 'mai',
    'June' => 'juin',
    'July' => 'juillet',
    'August' => 'août',
    'September' => 'septembre',
    'October' => 'octobre',
    'November' => 'novembre',
    'December' => 'décembre'
];

$jour = $jours_fr[date('l')];
$numero = date('d');
$mois = $mois_fr[date('F')];
$annee = date('Y');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 8 - Exercice 1</title>
</head>

<body>

    <header>
        <h1>PHP partie 9 - Exercice 1</h1>
    </header>

    <main>
        <div class="date_container">
            <?php echo "<p>Bonjour, nous somme le $jour $numero $mois $annee</p>";  ?>
        </div>
    </main>
</body>

</html>