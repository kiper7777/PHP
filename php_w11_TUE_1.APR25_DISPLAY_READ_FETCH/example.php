<?php
if(isset($_GET['submit']))
{
    $name=$_GET['name'];
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
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

    <input type="text" name="name" id="name">
    <input type="submit" value="submit" name="submit">

    </form>

    <script>
        let username='<?php echo "$name";?>';
        console.log(username);

        <?php echo "let uname= '$name';"?>
        console.log(uname);

        let username="<?php echo $name ?>"
        let n="<?= $name ?>"

        console.log("name is " + username);
        console.log(n);

    </script>
</body>
</html>