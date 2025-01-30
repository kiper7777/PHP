<?php
// $day="Tuesday";

// switch($day){
//     case "Monday":
//         echo "We have JavaScript class on Monday";
//         break;

//     case "Tuesday":
//         echo "We have PHP class";
//         break;

//     case "Wednesday":
//         echo "We don't have any class, please do practice at home";
//         break;

//     case "Thursday":
//         echo "We have online class for both";
//         break;

//     case "Friday":
//         echo "Fanday";
//         break;

//     default:
//     echo "Please enter the day properly wrong input";
// }


$day="Tuesday";

switch($day){
    case "Monday":case "Tuesday":
        echo "We have JavaScript class on Monday and we have PHP class on Tuesday";
        break;

    // case "Tuesday":
    //     echo "We have PHP class";
    //     break;

    case "Wednesday":case "Friday":
        echo "We don't have any class, please do practice at home and take rest";
        break;

    case "Thursday":
        echo "We have online class for both";
        break;

    // case "Friday":
    //     echo "Fanday";
    //     break;

    default:
    echo "Please enter the day properly, wrong input";
}

?>