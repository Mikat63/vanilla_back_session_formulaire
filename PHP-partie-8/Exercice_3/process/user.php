<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../index.php?error=bad_method');
    exit();
}

if (!isset($_POST['login']) || !isset($_POST['password'])) {
    header('location: ../index.php?error=missing');
    exit();
}

if (empty(trim($_POST['login'])) || empty(trim($_POST['password']))) {
    header('location: ../index.php?error=empty');
    exit();
}

if (strlen($_POST['login']) < 3 || strlen($_POST['password']) < 3) {
    header('location: ../index.php?error=min');
    exit();
}

if (strlen($_POST['login']) > 30 || strlen($_POST['password']) > 30) {
    header('location: ../index.php?error=max');
    exit();
}

if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.]).{8,}$/', $_POST['password'])) {
    $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
} else {
    header('location: ../index.php?error=password');
    exit();
}

$login = htmlspecialchars(strip_tags($_POST['login']));

setcookie('login', $login, time() + 3600 * 24, '/');
setcookie('password', $hashPassword, time() + 3600 * 24, '/');

header("location: ../index.php?success=success_process");
