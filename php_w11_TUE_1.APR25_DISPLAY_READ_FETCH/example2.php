<?php
$user=[];
if(isset($_GET['submit']))
{
    $name=$_GET['name'];
    $lname=$_GET['lname'];
    $course=$_GET['course'];
    $age=$_GET['age'];

    $user=json_encode(array($name,$lname,$course,$age));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

    <input type="text" name="name" id="name" value="<?=$name?>">
    <input type="text" name="lname" id="lname" value="<?=$lname?>">
    <input type="text" name="course" id="course" value="<?=$course?>">
    <input type="text" name="age" id="age" value="<?=$age?>">
    <input type="button" value="button" name="btn">

</form>

    <script>
        

    </script>
    
</body>
</html>




