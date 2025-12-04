<?php
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['nom']) || !isset($_POST['prenom'])) {
        header('location: index.php?error=missing');
        exit();
    }

    if (empty(trim($_POST['nom'])) || empty(trim($_POST['prenom']))) {
        header('location: index.php?error=empty');
        exit();
    }

    if (strlen($_POST['nom']) < 3 || strlen($_POST['prenom']) < 3) {
        header('location: index.php?error=min');
        exit();
    }

    if (strlen($_POST['nom']) > 30 || strlen($_POST['prenom']) > 30) {
        header('location: index.php?error=max');
        exit();
    }

    if (empty(trim($_POST['civilite']))) {
        header('location: index.php?error=missinggender');
        exit();
    }

    $civilite = ["monsieur", "madame", "mademoiselle", "autre"];

    if (!in_array($_POST['civilite'], $civilite)) {
        header('location: index.php?error=genderunknown');
        exit();
    }


    $nom = htmlspecialchars(strip_tags($_POST['nom']));
    $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
    $civiliteValue = $_POST['civilite'];
    $message = "Enregistrement réussi, merci $civiliteValue $prenom $nom";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 7 - Exercice 5</title>
</head>

<body>
    <div>
        <form action="index.php" method="POST">
            <div>
                <label for="civilite">civilité</label>
                <select name="civilite" id="civilite">
                    <option value="">Choisissez votre civilité</option>
                    <option value="monsieur">Monsieur</option>
                    <option value="madame">Madame</option>
                    <option value="mademoiselle">Mademoiselle</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <br>
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
            if (isset($_GET['error'])) {
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
                    case 'missinggender':
                        echo "<p class='red'>La civilité est obligatoire</p>";
                        break;
                    case 'genderunknown':
                        echo "<p class='red'>civilité inconnue</p>";
                        break;
                }
            } else {
                echo "<p class='green'>$message</p>";
            }
            ?>
        </div>
    </div>

</body>

</html>