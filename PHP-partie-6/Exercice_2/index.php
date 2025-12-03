<?php
$age = "";

if (isset($_GET['age']) && !empty(trim($_GET['age']))) {
    $age = "Age : " . htmlspecialchars($_GET['age']);
} else {
    $age = "Age not defined in url";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 6 - Exercice 2</title>
</head>

<body>
    <div>
        <p class="<?php echo ($age === "Age not defined in url") ? 'red' : 'green'; ?>">
            <?php echo $age ?>
        </p>
    </div>
</body>

</html>