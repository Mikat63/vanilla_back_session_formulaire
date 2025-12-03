<?php
if (isset($_GET['lastname']) && !empty(trim($_GET['lastname']))) {
    $lastname = "Lastname : " . htmlspecialchars($_GET['lastname']);
} else {
    $lastname = "Lastname : not found";
}

if (isset($_GET['firstname']) && !empty(trim($_GET['firstname']))) {
    $firstname = "Firstname : " . htmlspecialchars($_GET['firstname']);
} else {
    $firstname = "Firstname : not found";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 6 - Exercice 1</title>
</head>

<body>
    <div>
        <p class="<?php echo ($lastname === "Lastname : not found") ? 'red' : 'green'; ?>">
            <?php echo "$lastname<br>" ?>
        </p>

        <p class="<?php echo ($firstname === "Firstname : not found") ? 'red' : 'green'; ?>">
            <?php echo "$firstname<br>" ?>
        </p>

    </div>

</body>

</html>