<?php
$sql="INSERT INTO traders_direct
(email,username,password,fname,lname)
VALUES('$email','$username','$password','$fname','$lname')";
$insert_data=mysqli_query($conn,$sql);
if($insert_data)
{
    echo "insert data successfully";
}
else {
    echo "data not inserted successfully";
}

// include_once "database_connection.php";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $username = mysqli_real_escape_string($conn, $_POST['username']);
//     $fname = mysqli_real_escape_string($conn, $_POST['fname']);
//     $lname = mysqli_real_escape_string($conn, $_POST['lname']);
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//     $sql = "INSERT INTO traders_direct (email, username, password, fname, lname) 
//             VALUES ('$email', '$username', '$password', '$fname', '$lname')";
    
//     if (mysqli_query($conn, $sql)) {
//         echo "Данные успешно вставлены";
//     } else {
//         echo "Ошибка: " . mysqli_error($conn);
//     }
// }

?>