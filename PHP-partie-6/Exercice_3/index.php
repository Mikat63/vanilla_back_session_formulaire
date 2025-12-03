<?php
$startDate = "";
$endDate = "";

if (isset($_GET['startDate']) && !empty(trim($_GET['startDate']))) {
    $startDate = "Date start : " . htmlspecialchars($_GET['startDate']);
} else {
    $startDate = "Date start : unknown";
}

if (isset($_GET['endDate']) && !empty(trim($_GET['endDate']))) {
    $endDate = "Date end : " . htmlspecialchars($_GET['endDate']);
} else {
    $endDate = "Date end : unknown";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 6 - Exercice 3</title>
</head>

<body>
    <p class="<?php echo ($startDate === "Date start : unknown") ? 'red' : 'green'; ?>">
        <?php echo "$startDate<br>" ?>
    </p>

    <p class="<?php echo ($endDate === "Date end : unknown") ? 'red' : 'green'; ?>">
        <?php echo "$endDate<br>" ?>
    </p>
</body>

</html>