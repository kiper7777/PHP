<?php
if(isset($_GET['button']))
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
    <form action="" method="get">

        <input type="text" name="name" id="name" value="<?=$uname?>">
        <input type="button" value="button" name="btn">

    </form>

    <script>
        document.getElementById('btn').addEventListener("click",function(e)
    {
        let name=document.getElementById("name").value;
        console.log(name);
    })

    </script>

 
</body>
</html>