<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 7 - Exercice 2</title>
</head>

<body>
    <div>
        <form action="process/user.php" method="POST">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" minlength="3" maxlength="30" required>
            </div>
            <br>
            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" minlength="3" maxlength="30" required>
            </div>
            <br>
            <div>
                <button type="submit">Valider</button>
            </div>
        </form>
        <div>
            <?php
            if (isset($_GET['success'])) {
                echo "<p class='green'>Données récupérées avec succès</p>";
            } else if (isset($_GET['error'])) {
                switch (($_GET['error'])) {
                    case 'bad_method':
                        echo "<p class='red'>Méthode incorrecte</p>";
                        break;
                    case 'missing':
                        echo "<p class='red'>Tous les champs sont requis</p>";
                        break;
                    case 'empty':
                        echo "<p class='red'>Les champs ne peuvent être vides</p>";
                        break;
                    case 'min':
                        echo "<p class='red'>Les champs doivent avoir minimum 3 caractères</p>";
                        break;
                    case 'max':
                        echo "<p class='red'>Les champs doivent avoir maximum 30 caractères</p>";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>