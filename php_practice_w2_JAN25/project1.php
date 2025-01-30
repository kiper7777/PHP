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
    echo "Please enter the day properly wrong input";
}


?>