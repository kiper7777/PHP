<?php
include_once "database_connection.php";
$sql="CREATE TABLE employee(
    student_id INT(30) NOT NULL UNIQUE AUTO_INCREMENT,
    name VARCHAR(22) NOT NULL,
    phonenumber VARCHAR(10) NOT NULL,
    city VARCHAR(22) NOT NULL DEFAULT 'london',
    age INT(100) NOT NULL CHECK(age>=18) 
);";

    $create_table=mysqli_query($conn, $sql);
    if($create_table)
    {
        echo "table created successfully";
    } 
    else 
    echo "table not created successfully".mysqli_error($conn);

?>