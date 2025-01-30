<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Practice Assignment on output variable

// 1. Write a program to print “Hello PHP” using the php variable?
// 2. Write a program to display “Welcome to the PHP World" with a PHP script that uses a built-in PHP function  echo to output the text “PHP World!” 
// using some part of the text in variable & some part directly in echo.
// For example: $name=”PHP world” concatenate with rest string  
// 3. Write a program to print 2 php variables using a single echo statement. Example: $a,$b
// 4. Write a program to sum two variables.
// Output should be like this The addition of 10 and 20 is 30
// 5. Write a program to multiply two variables.
// Output should be like this The addition of 10 and 20 is 30
// 6. Write a program to check data type of the following variable
// $a=10;
// $b=12.89;
// $string="SAE";
// $d=true;
// 7. Write a program to increment the value of a by 2 using shorthand operator 
// 8. write a program to increment the value of a variable using increment operator.
// 9. Write a program to divide two numbers a=20 and b=4.The result should be in float.

// 10. Write a program to calculate the string length. 
// 11. Write a program to use the number function floor() and ceil().

    //1
    echo "Hello PHP";
    //2
    $name="PHP world!";
    echo "Welcome to the" . "$name";
    //3
    $a=10;
    $b=20;
    //4
    $sum=10+20;
    echo "The addition of 10 and 20 is 30";
    //5
    $mul=10*20;
    echo "The addition of 10 and 20 is 30";
    //6
    $a=10;
    echo gettype($a);

    $b=12.89;
    echo gettype($b);

    $string="SAE";
    echo gettype($string);

    $d=true;    
    echo gettype($d);
    // var_dump($num3);

    //7
    // $a=10;
    // echo $a++;

    //8
    // $a=10;
    // echo $a--;

    //9
    // $a=20;
    // $b=4;
    // $div=20/4;
    // echo ""


    //10
    $fname="John";
    echo strlen($fname);
    //11
    $num=10.35;
    // $numfloor=floor($sum);
    // echo " <h1>$numfloor <h1>";

    echo "<h1> floor($num) <h1>";
    $num_ceil=ceil($num);
    echo "<h1>$num_ceil <h1>";
    $num3=12.89;
    echo gettype($num3);

    //example
    $phone_no;
    $isval=isset($phone_no);
    var_dump($isval);

    $name="John";
    define("message", "Welcome to our website");
    echo $name.constant("message");

    ?>
</body>
</html>