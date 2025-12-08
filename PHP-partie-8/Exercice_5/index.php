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
        <h1>PHP partie 8 - Exercice 5</h1>
    </header>
    <main>
        <div class="form_container">
            <form class="form_section" action="process/user.php" method="POST">
                <div>
                    <h2>Modifier vos informations : </h2>
                </div>
                <div>
                    <label for="login">Identifiant :</label>
                    <input type="text" name="login" id="login" placeholder="Entrez votre nom" minlength="3" maxlength="30" required>
                </div>

                <div>
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="password" placeholder="Entrez mot de passe" minlength="3" maxlength="30" required>
                </div>

                <div>
                    <button class="" type="submit">Valider</button>
                </div>
            </form>
            <div>
                <?php
                if (isset($_GET['success'])) {
                    echo "<p class='green'>Connexion réussie</p>";
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
                        case 'password':
                            echo "<p class='red'>Le mot de passe doit contenir 8 caractères, 1 majuscule, un chiffre et 1 caractère spécial</p>";
                            break;
                        default:
                            echo "Erreur inconnue";
                            break;
                    }
                }
                ?>
            </div>
        </div>
    </main>

</body>

</html>