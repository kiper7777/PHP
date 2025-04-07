<?php
$num=json_encode([1=>'html',2=>'php',3=>'python']); 
echo $num;
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
        let num=JSON.parse('<?= $num?>');
        console.log(num);

    </script>
    
</body>
</html>