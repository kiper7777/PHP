<?php
// echo ("<pre>");
// var_dump($_SERVER);
// echo ("</pre>");

// echo "<br>";
// echo $_SERVER["REQUEST_METHOD"];

// if(isset($_GET['submit']))
// {

// }
// if($_SERVER["REQUEST_METHOD"]=='get');

// echo ("<pre>");
// print_r($_SERVER);
// echo ("</pre>");

// if(isset($_POST['submit']))
// {
//   $name=$_REQUEST["name"];
//   echo $name;
// }

if($_SERVER['REQUEST_METHOD']=="post")
{
    $name=$_REQUEST["name"];
    echo $name;
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
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

    <label for="">name</label>
    <input type="text" name="name" id="name">

    <input type="submit" value="submit" name="submit">


    </form>
</body>
</html>

