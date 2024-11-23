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
    <title>Formularz</title>
    <style>
        .form-container {
            width: 50%; 
            padding: 20px; 
        }
        .form-row {
            display: flex; 
            justify-content: space-between; 
            margin: 10px 0;
        }
        .form-row label {
            width: 40%; 
            text-align: right; 
            padding-right: 10px;
        }
        .form-row input, 
        .form-row select {
            width: 55%; 
            padding: 5px; 
            border: 1px solid black; 
        }
        .form-header {
            text-align: center; 
            margin-bottom: 20px;
        }
        .back-link {
            margin-bottom: 20px; 
            text-align: center; 
        }
    </style>
</head>
<body>


<a href="index.html">Powrót do poprzedniej strony</a>


<div class="form-container">
    <div class="form-header">
        <h2>Podaj dane:</h2>
    </div>
    <div class="form-row">
        <label for="name">Imię:</label>
        <input type="text" id="name" placeholder="Wpisz imię">
    </div>
    <div class="form-row">
        <label for="surname">Nazwisko:</label>
        <input type="text" id="surname" placeholder="Wpisz nazwisko">
    </div>
    <div class="form-row">
        <label for="street">Ulica:</label>
        <input type="text" id="street" placeholder="Wpisz ulicę">
    </div>
    <div class="form-row">
        <label for="house">Dom:</label>
        <input type="text" id="house" placeholder="Numer domu">
    </div>
    <div class="form-row">
        <label for="apartment">Mieszkanie:</label>
        <input type="text" id="apartment" placeholder="Numer mieszkania">
    </div>
    <div class="form-row">
        <label for="phone">Telefon:</label>
        <input type="tel" id="phone" placeholder="Wpisz numer telefonu">
    </div>
    <div class="form-row">
        <label for="birthdate">Data urodzenia:</label>
        <input type="date" id="birthdate">
    </div>
    <div class="form-row">
        <label for="license">Prawo jazdy:</label>
        <input type="checkbox" id="license"> Posiadam prawo jazdy
    </div>
    <div class="form-row">
        <label for="gender">Płeć:</label>
        <select id="gender">
            <option value="m">Mężczyzna</option>
            <option value="k">Kobieta</option>
            <option value="i">Inna</option>
        </select>
    </div>
    <div class="form-row">
        <label for="password">Hasło:</label>
        <input type="password" id="password" placeholder="Wpisz hasło">
    </div>
    <div class="form-row">
        <label for="city">Miasto:</label>
        <input type="text" id="city" placeholder="Wpisz miasto">
    </div>
    <div class="form-row">
        <label for="country">Państwo:</label>
        <input type="text" id="country" placeholder="Wpisz państwo">
    </div>
</div>

</body>
</html>