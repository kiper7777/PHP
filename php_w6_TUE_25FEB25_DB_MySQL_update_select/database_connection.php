<?php
$servername="localhost";
$username="root";
$password="";
$database="employeelondon";

$conn=mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{
    die("not connected successfully".mysqli_connect_error());
} 


?>