<?php
if (isset($_GET['week']) && !empty(trim($_GET['week']))) {
    $week = "Week : " . htmlspecialchars($_GET['week']);
} else {
    $week = "Error : week not found";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP parti 6 - Exercice 5</title>
</head>

<body>
    <div>
        <p class="<?php echo ($week === "Error : week not found") ? 'red' : 'green' ?>">
            <?php echo $week; ?>
        </p>
    </div>
</body>

</html>