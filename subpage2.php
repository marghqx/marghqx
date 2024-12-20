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
    <title>Tabela</title>
    <style>
        table {
            width: 50%; 
            border-collapse: collapse;
            margin: 20px auto; 
        }
        th, td {
            border: 1px solid black; 
            padding: 10px; 
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <p><a href="index.html">Powrót do poprzedniej strony</a></p>
    <thead>
        <tr>
            <th colspan="2">Podaj dane:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Imię</td>
            <td><input type="text" placeholder="Wpisz imię"></td>
        </tr>
        <tr>
            <td>Nazwisko</td>
            <td><input type="text" placeholder="Wpisz nazwisko"></td>
        </tr>
        <tr>
            <td>Ulica</td>
            <td><input type="text" placeholder="Wpisz ulicę"></td>
        </tr>
        <tr>
            <td>Dom</td>
            <td><input type="text" placeholder="Numer domu"></td>
        </tr>
        <tr>
            <td>Mieszkanie</td>
            <td><input type="text" placeholder="Numer mieszkania"></td>
        </tr>
        <tr>
            <td>Telefon</td>
            <td><input type="tel" placeholder="Wpisz numer telefonu"></td>
        </tr>
        <tr>
            <td>Data urodzenia</td>
            <td><input type="date"></td>
        </tr>
        <tr>
            <td>Prawo jazdy</td>
            <td><input type="checkbox"> Posiadam prawo jazdy</td>
        </tr>
        <tr>
            <td>Płeć</td>
            <td>
                <select>
                    <option value="m">Mężczyzna</option>
                    <option value="k">Kobieta</option>
                    <option value="i">Inna</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Hasło</td>
            <td><input type="password" placeholder="Wpisz hasło"></td>
        </tr>
        <tr>
            <td>Miasto</td>
            <td><input type="text" placeholder="Wpisz miasto"></td>
        </tr>
        <tr>
            <td>Państwo</td>
            <td><input type="text" placeholder="Wpisz państwo"></td>
        </tr>
    </tbody>
</table>

</body>
</html>
