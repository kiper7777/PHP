<?php
session_start();
include_once "database_connection.php";

// Если форма отправлена
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Поиск пользователя по имени
    $query = "SELECT * FROM traders_beginners WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Проверка пароля
        if ($password === $user['password']) { // если хеш, использовать password_verify()
            $_SESSION['user_id'] = $user['id']; // сохранить ID в сессии
            header("Location: user_dashboard.php");
            exit();
        } else {
            $error = "❌ Неверный пароль.";
        }
    } else {
        $error = "❌ Пользователь не найден.";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; }
        form { max-width: 400px; margin: auto; display: grid; gap: 10px; }
        input, button { padding: 10px; }
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Login to your account</h2>

    <?php if (!empty($error)): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit" name="login">Log In</button>
    </form>
</body>
</html>
