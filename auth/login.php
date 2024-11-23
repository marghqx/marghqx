<?php
session_start();

// Jeśli użytkownik jest zalogowany, przekieruj na stronę startową
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: index.php');
    exit();
}

// Obsługa logowania
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Weryfikacja danych logowania
    if ($username === $_SESSION['user']['username'] && $password === $_SESSION['user']['password']) {
        $_SESSION['logged_in'] = true;
        header('Location: index.php');
        exit();
    } else {
        $error = "Nieprawidłowa nazwa użytkownika lub hasło.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4; }
        .container { background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .error { color: red; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Logowanie</h2>
        <?php if (isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST">
            <div>
                <label for="username">Nazwa użytkownika:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Hasło:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Zaloguj się</button>
        </form>
        <p><a href="formularz.php">Zarejestruj się</a></p>
    </div>
</body>
</html>
