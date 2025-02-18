<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername, $username, $password);
if($conn)
{
    echo "connect with server successfully";
} else {
    echo "not connected please try again" + mysqli_connect_error();
}


?>