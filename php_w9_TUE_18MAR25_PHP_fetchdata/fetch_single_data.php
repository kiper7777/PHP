<?php

header('Content-Type:application/json');
header('Access-control-Allow-Origin:*');

$data=json_decode(file_get_contents("php://input"),true);
$id=$data['id'];

// include "database_connection.php";

$conn=mysqli_connect("localhost","root","","employeelondon") or die("connection failed");

$sql="SELECT * FROM web WHERE id='{$id}'";

$result=mysqli_query($conn,$sql) or die("SQL die");

if(mysqli_num_rows($result)>0)
{
   $record=mysqli_fetch_all($result,MYSQLI_ASSOC);
   echo json_encode($record);
}
else
{
   echo json_encode(array("message"=>"recored not found","status"=>false));
}
?>
