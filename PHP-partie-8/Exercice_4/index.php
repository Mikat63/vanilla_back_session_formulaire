<?php
if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    $loginCookie = htmlspecialchars($_COOKIE['login']);
    $passwordCookie = htmlspecialchars($_COOKIE['password']);
} else {
    $noCookie = "Aucun cookie trouvé";
}

// PHP_partie_8 exercice 5 redirect after modify cookies
if (isset($_GET['success'])) {
    $successModifyCookie = "Les Informations sont mofidiées avec succès";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 7 - Exercice 2</title>
</head>

<body>
    <header>
        <h1>PHP partie 8 - Exercice 4</h1>
    </header>
    <main>
        <div class="cookie_info_container">
            <?php
            if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
                echo "<h2>Voici vos cookies de connexion </h2>";
                echo "<p><span>Identifiant</span>: $loginCookie</p>";
                echo "<p><span>Mot de passe :</span> $passwordCookie</p>";
            } else {
                echo "<p>$noCookie</p>";
            } ?>

            <!-- show success modify cookies in the exercice 5 from php partie_8 -->
            <?php
            if (isset($_GET['success'])) {
                echo "<p class='green_color'>$successModifyCookie</p>";
            }
            ?>
        </div>
    </main>

</body>

</html>