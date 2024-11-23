<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Strona startowa</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: 'Montserrat', sans-serif;
        background-color: #cce5ff;
        margin: 0;
        color: #333;
    }
    .container {
        background-color: #ffffff;
        padding: 30px;
        max-width: 500px;
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 30px;
        }

    .section {
        text-align: center;
    }

    </style>
</head>
<body>

    <div class="container">
        <h1>Marta Czarnecka</h1>

        <div class="section">
            <p><a href="subpage1.html">Podział tekstu - tabela</a></p>
            <p><a href="subpage2.html">Formularz - tabela</a></p>
            <p><a href="subpage3.html">Podział tekstu - CSS</a></p>
            <p><a href="subpage4.html">Formularz - CSS</a></p>
            <p><a href="calculator.html">Kalkulator</a></p>
            <p><a href="formularz.html">Formularz z walidacją</a></p>
            <p><a href="profile.php">Moje dane</a></p>
        </div>
    </div>

</body>
</html>
