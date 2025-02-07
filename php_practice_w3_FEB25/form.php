
<?php

if(isset($_GET["submit"]))
{
    $userid=$_GET['userid'];
    $phone=$_GET['phone'];

    $res=preg_match("/[a-z]{2,}/",$userid);
    $r=preg_match("/^\({0,1}[0-9]{3}\){0,1}[-.\s]{0,1}[0-9]{3}[-.\s]{0,1}[0-9]{4}/", $phone);
    if(($res)&&($r))
    {
        echo "User ID followed the pattern";
    } else {
        echo "User ID has not followed the pattern, please input one more time";
    }
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
    <form action="form.php" method="get" class="form" id="form">

        <div>
            <label for="userid">User ID</label>
            <input type="text" name="userid" id="userid">

            <input type="submit" value="submit" name="submit">
        </div>

        <!-- <div>
        <label for="phone">Phone Number</label>
         <input type="text" name="phone" id="phone">

         <input type="submit" value="submit" name="submit">
        </div> -->

         

    </form>
    
</body>
</html>