<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$day=$_GET["day"];

switch($day){
    case "Monday":
        echo "<h1>We have class on Monday</h1>";
        break;

    case "Tuesday":
        echo "<h1>We have class on Tuesday</h1>";
        break;

    case "Wednesday":
        echo "<h1>We have class on Wednesday</h1>";
        break;

    case "Thursday":
        echo "<h1>We have class on Thursday</h1>";
        break;

    case "Friday":
        echo "<h1>We have class on Friday</h1>";
        break;

    default:
    echo "Wrong input";
}

?>

<form action="project2.php" method="get">
        <select name="day">
            <option value="PHP">PHP</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
        </select>

        <input type="submit" value="submit">
    </form>
</body>
</html>

