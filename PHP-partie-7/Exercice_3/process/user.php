<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('location: ../index.php?error=bad_method');
    exit();
}

if (!isset($_GET['nom']) || !isset($_GET['prenom'])) {
    header('location: ../index.php?error=missing');
    exit();
}

if (empty(trim($_GET['nom'])) || empty(trim($_GET['prenom']))) {
    header('location: ../index.php?error=empty');
    exit();
}

if (strlen($_GET['nom']) < 3 || strlen($_GET['prenom']) < 3) {
    header('location: ../index.php?error=min');
    exit();
}

if (strlen($_GET['nom']) > 30 || strlen($_GET['prenom']) > 30) {
    header('location: ../index.php?error=max');
    exit();
}

$nom = htmlspecialchars(strip_tags($_GET['nom']));
$prenom = htmlspecialchars(strip_tags($_GET['prenom']));

echo "Nom : $nom<br>Prénom : $prenom<br>";
