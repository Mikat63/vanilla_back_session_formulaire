<?php
if (isset($_GET['language']) && !empty(trim($_GET['language']))) {
    $language = "Language : " . htmlspecialchars($_GET['language']);
} else {
    $language = "Language : not defined";
}

if (isset($_GET['server']) && !empty(trim($_GET['server']))) {
    $server = "Server : " . htmlspecialchars($_GET['server']);
} else {
    $server = "Server : Not defined";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 6 : Exercice 4</title>
</head>

<body>
    <div>
        <p class="<?php echo ($language === "Language : not defined")? 'red' : 'green';?>">
            <?php echo "$language<br>"?>
        </p>

        <p class="<?php echo ($server === "Server : Not defined") ? 'red' : 'green';?>">
            <?php echo "$server<br>"?>
        </p>
    </div>
</body>

</html>