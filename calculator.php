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
    <title>Kalkulator</title>
    <link rel="stylesheet" href="assets/css/calculatorcss.css">
    <script src="assets/js/calculatorjs.js"></script>
</head>
<body>
    <div class="kalkulator">
        <input type="text" id="ekran" disabled>
        <div class="przyciski">
            <div><button onclick="wyswietl('7')">7</button></div>
            <div><button onclick="wyswietl('8')">8</button></div>
            <div><button onclick="wyswietl('9')">9</button></div>
            <div><button class="operacja" onclick="wyswietl('/')">/</button></div>

            <div><button onclick="wyswietl('4')">4</button></div>
            <div><button onclick="wyswietl('5')">5</button></div>
            <div><button onclick="wyswietl('6')">6</button></div>
            <div><button class="operacja" onclick="wyswietl('*')">*</button></div>

            <div><button onclick="wyswietl('1')">1</button></div>
            <div><button onclick="wyswietl('2')">2</button></div>
            <div><button onclick="wyswietl('3')">3</button></div>
            <div><button class="operacja" onclick="wyswietl('+')">+</button></div>

            <div><button onclick="wyswietl('0')">0</button></div>
            <div><button onclick="wyswietl('.')">.</button></div>
            <div><button class="czyszczenie" onclick="wyczysc()">C</button></div>
            <div><button class="operacja" onclick="wyswietl('-')">-</button></div>

        </div>
        <button class="rownosc" onclick="wynik()">=</button>
    </div>
</body>
</html>
