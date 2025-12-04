<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../index.php?error=bad_method');
    exit();
}

if (!isset($_POST['nom']) || !isset($_POST['prenom'])) {
    header('location: ../index.php?error=missing');
    exit();
}

if (empty(trim($_POST['nom'])) || empty(trim($_POST['prenom']))) {
    header('location: ../index.php?error=empty');
    exit();
}

if (strlen($_POST['nom']) < 3 || strlen($_POST['prenom']) < 3) {
    header('location: ../index.php?error=min');
    exit();
}

if (strlen($_POST['nom']) > 30 || strlen($_POST['prenom']) > 30) {
    header('location: ../index.php?error=max');
    exit();
}

$nom = htmlspecialchars(strip_tags($_POST['nom']));
$prenom = htmlspecialchars(strip_tags($_POST['prenom']));

echo "<h2>Résultat du formulaire</h2>";
echo "<p><strong>Nom : </strong>$nom</p>";
echo "<p><strong>Prénom : </strong>$prenom</p>";
