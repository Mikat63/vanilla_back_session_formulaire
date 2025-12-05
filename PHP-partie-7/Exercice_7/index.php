<?php
if (
    !empty($_POST['civilite'])
    && !empty($_POST['nom'])
    && !empty($_POST['prenom'])
    && ($_FILES['upload_file']['error'] === 0)
) {
    $civilite = strip_tags(htmlspecialchars($_POST['civilite']));
    $nom = strip_tags(htmlspecialchars($_POST['nom']));
    $prenom = strip_tags(htmlspecialchars($_POST['prenom']));
    $infoFile = pathinfo($_FILES['upload_file']['name']);
    $nameFile = $infoFile['filename'];
    $extensionFile = $infoFile['extension'];

    echo "<div>
        <h2>Résultat du formulaire :</h2>
        <p>Civilité: $civilite </p>
        <p>Nom: $nom  </p>
        <p>Prénom: $prenom </p>
        <p>Nom du fichier: $nameFile</p>
        <p>Extension du fichier: $extensionFile</p>
    </div>";
} else {
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP partie 7 - Exercice 7</title>
    </head>

    <body>
        <div>
            <form action="index.php" method="POST" enctype="multipart/form-data">
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
                    <input type="text" name="nom" id="nom" placeholder="Entrez votre nom">
                </div>
                <br>
                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom">
                </div>
                <br>
                <div>
                    <label for="upload_file">Importer un fichier :</label>
                    <input type="file" name="upload_file" id="upload_file">
                </div>
                <br>
                <div>
                    <button type="submit">Valider</button>
                </div>
            </form>

        </div>
    </body>

    </html>
<?php
}
?>