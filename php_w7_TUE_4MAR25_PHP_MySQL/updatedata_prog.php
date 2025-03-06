<?php
include_once "database_connection.php";

if(isset($_GET['delete']))
{
  $sql="DELETE FROM webStudent WHERE id=1";

  $result=mysqli_query($conn,$sql);
  if($result)
  {
      echo ("deleted sucessfully");
  }
  else{
   echo ("not deleted sucessfully");
  }
}


if(isset($_GET['update']))
 {
   

   $name=$_GET["name"];
   $stud=$_GET["stud"];
   echo  $stud;

   // $name="Robin";

   $sql="UPDATE webstudent set name='$name' WHERE id ='$stud' ";

   $result=mysqli_query($conn, $sql);

   // $aff=mysqli_affected_rows($conn);
   // echo "the rows affected  $aff";

   if($result)
   {
       echo("updated sucessfully");
   }
       else
       {
           echo ("didn't update sucessfully".mysqli_error($conn));
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
   <form action="<?php $_SERVER['PHP_SELF']?>" method="get">

    <label for="stud">id</label>
    <input type="text" name="stud" id="stud">

    <label for="">name</label>
    <input type="text" name="name" id="name">

    <input type="submit" value="update" name="update">
    <input type="submit" value="delete" name="delete">

   </form>
</body>
</html>
