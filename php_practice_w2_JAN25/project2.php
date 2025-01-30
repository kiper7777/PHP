<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="POST">

    </form>

    <?php 
    $cards = $_GET['cards'];
    if ($cards == "Python")
    echo "Python selected";
    else if ($cards == "PHP")
    echo "PHP selected";
    else if ($cards == "HTML")
    echo "HTML selected";
    else if ($cards == "Javascript")
    echo "Javascript selected";

    else echo "Doesn't work";

    ?>
</body>
</html>