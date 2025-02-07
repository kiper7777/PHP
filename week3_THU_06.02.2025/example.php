<?php
//    $message="I am in SAE";
//    echo $message;
//    echo '<script> console.log('SAE') </script>';

//    echo '<script type="text/JavaScript">
//    let name= prompt("Hi, I am in JavaScript")
//    document.write(name);
//    </script>';

//    echo '<script>
//        let a=10;
//        let b=20;
//        let sum=a+b;
//        document.write(sum);
//    </script>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let a=50
        let b=30
        let sum=a+b
        document.write(<?php $a=50; $b=30; $sum=$a+$b; echo $sum; ?>);

        
    </script>
</body>
</html>