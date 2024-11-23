<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje dane</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f4; }
        .container { background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="container">
        <h2>Moje dane</h2>
        <p><strong>Imię:</strong> <?= $user['name'] ?></p>
        <p><strong>Nazwisko:</strong> <?= $user['surname'] ?></p>
        <p><strong>Ulica:</strong> <?= $user['street'] ?></p>
        <p><strong>Dom:</strong> <?= $user['house'] ?></p>
        <p><strong>Mieszkanie:</strong> <?= $user['apartment'] ?></p>
        <p><strong>Telefon:</strong> <?= $user['phone'] ?></p>
        <p><strong>Data urodzenia:</strong> <?= $user['date'] ?></p>
        <p><strong>Prawo jazdy:</strong> <?= $user['license'] ? 'Tak' : 'Nie' ?></p>
        <p><strong>Płeć:</strong> <?= $user['gender'] ?></p>
        <p><strong>Miasto:</strong> <?= $user['city'] ?></p>
        <p><strong>Państwo:</strong> <?= $user['country'] ?></p>
        <a href="logout.php">Wyloguj się</a>
    </div>
</body>
</html>
