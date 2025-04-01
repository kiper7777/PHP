<?php
include_once "database_connection.php";

$sql="INSERT INTO web
(id,name,lname)
VALUES(3,'Bob','Ginnes')";

$insert_data=mysqli_query($conn,$sql);
if($insert_data)
{
    echo "insert data successfully";
}
else {
    echo "data not inserted successfully";
}


?>