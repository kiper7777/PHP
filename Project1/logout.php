<?php
session_start();
session_unset(); // Очистка всех переменных сессии
session_destroy(); // Уничтожение сессии

// Перенаправление на страницу входа или главную
header("Location: login.php");
exit();
