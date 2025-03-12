<?php
include_once "database_connection.php";

if((isset($_POST['submit'])) && (isset($_FILES['img'])))
{
    echo "<pre>";
    print_r($_FILES['img']); 
    echo "</pre>";   

    $file_name=$_FILES['img']['name'];
    $file_type=$_FILES['img']['type'];
    $file_tmp_name=$_FILES['img']['tmp_name'];
    $file_size=$_FILES['img']['size'];
    $file_upload_error=$_FILES['img']['error'];

    $file_Ext=explode(".",$file_name);
    $file_actual_ext=strtolower(end($file_Ext));


    $allowed_ext=['jpg','jpeg','png','pdf'];
    if(in_array($file_actual_ext,$allowed_ext) && $file_size < 5000000)
    {
        move_uploaded_file($file_tmp_name,"upload_image/".$file_name);
        $sql="INSERT INTO image(image_name) VALUES('$file_name')";

        $res=mysqli_query($conn,$sql);
        if($res)
        {
            echo ("successfully insert");
        }else{
            echo ("not successfully insert");
        }
        }

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
    <form action="<?php $_SERVER['PHP_SELF']?>" method='POST' enctype="multipart/form-data">

    <input type="file" name="img" id="img">

    <input type="submit" value="submit" name="submit">

    <p id="message" style="color: red;"></p>
    <div class="containat">
        <?php
        $sql="SELECT * from image";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        while($rows=mysqli_fetch_array($res))
    {
        $img=$rows["image_name"];
        // echo $img;
        $imgurl="upload_image/".$img;
        echo "<div class='profile'> ";
        echo "<img src='$imgurl'>";
        echo "</div>";
    }

        ?>
    </div>

    </form>

    <script></script>
</body>
</html>


