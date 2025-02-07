<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $str="Hello world SAE web";
    $res=preg_match_ALL("/[a-z]{2,}/",$str,$match);
    // echo $res;

    echo("<pre>");
    print_r($match);
    echo("</pre>");

    // if($res)
    // {
    //     echo "<h2>Data is correct</h2>";
    // } else {
    //     echo '<h2>Please enter one more time</h2>';
    // }

?>
    
</body>
</html>
