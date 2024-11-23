<?php
session_start(); // Rozpoczęcie sesji

// Sprawdzenie, czy formularz został wysłany metodą POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Zapisujemy dane użytkownika do sesji
    $_SESSION['user'] = [
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'street' => $_POST['street'],
        'house' => $_POST['house'],
        'apartment' => $_POST['apartment'],
        'phone' => $_POST['phone'],
        'date' => $_POST['date'],
        'license' => isset($_POST['license']),
        'gender' => $_POST['gender'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), // Hashowanie hasła
        'city' => $_POST['city'],
        'country' => $_POST['country'],
        'username' => $_POST['name'] . $_POST['surname'], // Generowanie prostego loginu
    ];

    // Przekierowanie na stronę logowania
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

