<?php
include_once "database_connection.php";

$sql = "SELECT * FROM employee";

$result = mysqli_query($conn, $sql);

if ($result) {
    $num = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<pre>';
        var_dump($row);  // Покажет содержимое массива $row
        echo '</pre>';
        
        echo '<br> Hello ' . $row['name'] . ' from ' . $row['city'] . '<br>' . ' Welcome to our website' . '<br>';
    }

    echo "Data selected successfully";  // Успешная выборка данных
} else {
    echo "Data not selected";  // Ошибка при выборке данных
}
?>
