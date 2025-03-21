<?php
include_once "database_connection.php";

$sql="UPDATE `employee`
SET `age`=34 
WHERE `employee`.`student_id`=1";   

$update_data=mysqli_query($conn,$sql);
if($update_data)
{
    echo "data updated successfully";
}
else {
    echo "data not updated";
}

?>