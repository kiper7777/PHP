<?php
include_once "database_connection.php";

$sql="INSERT INTO employee(student_id,name,phonenumber,city,age)
VALUES(1,'Tom',07912345678,'London',24)";

$insert_data=mysqli_query($conn,$sql);
if($insert_data)
{
    echo "data inserted successfully";
}
else {
    echo "data not inserted";
}

?>