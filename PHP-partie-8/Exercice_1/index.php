<?php
$userAgent = strip_tags(htmlspecialchars($_SERVER['HTTP_USER_AGENT']));
$userIp = strip_tags(htmlspecialchars($_SERVER['REMOTE_ADDR']));
$userServerName = strip_tags(htmlspecialchars($_SERVER['SERVER_NAME']));
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
        <h1>PHP partie 8 - Exercice 1</h1>
    </header>

    <main>
        <div class="main_container">
            <div class="user_info">
                <h2>Voici les informations de votre poste :</h2>
                <?php echo "<P><span>Agent utilisateur</span>: $userAgent</P>"; ?>
                <?php echo "<P><span>IP utilisateur:</span> $userIp</P>"; ?>
                <?php echo "<P><span>Nom du serveur:</span> $userServerName</P>"; ?>
            </div>
        </div>
    </main>
</body>

</html>