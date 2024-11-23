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
    <script src="assets/js/formularzJS.js"></script>
    <link rel="stylesheet" href="assets/css/formularzCSS.css">
</head>
<body>

<div class="form-container">
    <div class="back-link">
        <a href="index.html">Powrót do poprzedniej strony</a>
    </div>
    <div class="form-header">
        <h2>Podaj dane:</h2>
    </div>
    <form name="form" action="losowastrona.pl" onsubmit="return Validate()" >
    <div class="form-row">
        <label for="name">Imię:</label>
        <input type="text" id="name" name="name" placeholder="Wpisz imię">
    </div>
    <div class="form-row">
        <label for="surname">Nazwisko:</label>
        <input type="text" id="surname" name="surname" placeholder="Wpisz nazwisko">
    </div>
    <div class="form-row">
        <label for="street">Ulica:</label>
        <input type="text" id="street" name="street" placeholder="Wpisz ulicę">
    </div>
    <div class="form-row">
        <label for="house">Dom:</label>
        <input type="text" id="house" name="house" placeholder="Numer domu">
    </div>
    <div class="form-row">
        <label for="apartment">Mieszkanie:</label>
        <input type="text" id="apartment" name="apartment" placeholder="Numer mieszkania">
    </div>
    <div class="form-row">
        <label for="phone">Telefon:</label>
        <input type="tel" id="phone" name="phone" placeholder="Wpisz numer telefonu">
    </div>
    <div class="form-row">
        <label for="date">Data urodzenia:</label>
        <input type="date" name="date" id="date">
    </div>
    <div class="form-row">
        <label for="license">Prawo jazdy:</label>
        <input type="checkbox" name="license" id="license"> Posiadam prawo jazdy
    </div>
    <div class="form-row">
        <label for="gender">Płeć:</label>
        <select id="gender" name="gender">
            <option value="m">Mężczyzna</option>
            <option value="k">Kobieta</option>
            <option value="i">Inna</option>
        </select>
    </div>
    <div class="form-row">
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" placeholder="Wpisz hasło">
    </div>
    <div class="form-row">
        <label for="city">Miasto:</label>
        <input type="text" id="city" name="city" placeholder="Wpisz miasto">
    </div>
    <div class="form-row">
        <label for="country">Państwo:</label>
        <input type="text" id="country" name="country" placeholder="Wpisz państwo">
    </div>
    <div class="form-footer">
        <button type="submit">Zapisz</button>
    </div>
</form>
</div>

</body>
</html>
