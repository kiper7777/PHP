<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method:GET');

$conn=mysqli_connect("localhost","root","","employeelondon") or die("connection failed");

$sql="SELECT * FROM web";

$result=mysqli_query($conn,$sql) or die("query is not executed properly".mysqli_error($conn));

if(mysqli_num_rows($result)>0)
{
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}else{
    echo json_encode(array('message'=>'data not fetch properly','status'=>false));
}


?>