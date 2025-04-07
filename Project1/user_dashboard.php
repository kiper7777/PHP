<?php if (isset($_SESSION['user_id'])): ?>
    <form action="logout.php" method="POST" style="display: inline;">
        <button type="submit" style="background: none; border: none; color: blue; cursor: pointer;">Выйти</button>
    </form>
<?php endif; ?>


<?php
session_start();
include_once "database_connection.php";

// Проверка аутентификации
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['user_id'];

// Получение данных пользователя
$query = "SELECT * FROM traders_beginners WHERE id = $userId";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// Обработка обновления данных
if (isset($_POST['update'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $updateQuery = "UPDATE traders_beginners SET email='$email', username='$username', fname='$fname', lname='$lname' WHERE id=$userId";
    mysqli_query($conn, $updateQuery);

    header("Location: user_dashboard.php?success=1");
    exit();
}

// Обработка удаления аккаунта
if (isset($_POST['delete'])) {
    $deleteQuery = "DELETE FROM traders_beginners WHERE id=$userId";
    mysqli_query($conn, $deleteQuery);

    session_destroy();
    header("Location: signup.php?deleted=1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal account</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 600px; margin: auto; }
        form { display: grid; gap: 10px; }
        input { padding: 10px; }
        button { padding: 10px; font-weight: bold; }
        .success { color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?= htmlspecialchars($user['username']) ?>!</h2>

        <?php if (isset($_GET['success'])): ?>
            <p class="success">✅ Data updated successfully.</p>
        <?php endif; ?>

        <form method="POST" action="">
            <label>Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>

            <label>Username:</label>
            <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>

            <label>First Name:</label>
            <input type="text" name="fname" value="<?= htmlspecialchars($user['fname']) ?>" required>

            <label>Last Name:</label>
            <input type="text" name="lname" value="<?= htmlspecialchars($user['lname']) ?>" required>

            <button type="submit" name="update">💾 Update</button>
            <button type="submit" name="delete" onclick="return confirm('Вы уверены, что хотите удалить аккаунт?')">🗑️ Удалить аккаунт</button>
        </form>
    </div>
</body>
</html>
