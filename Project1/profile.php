<?php
session_start();
include "database_connection.php";


$user_id = $_SESSION['user_id'];

// if (isset($_POST['update_profile'])) {
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];

//     if (!empty($_FILES['profile_photo']['name'])) {
//         $photo_name = $_FILES['profile_photo']['name'];
//         $photo_tmp = $_FILES['profile_photo']['tmp_name'];
//         $target_dir = "uploads/";
//         move_uploaded_file($photo_tmp, $target_dir . $photo_name);

//         $sql = "UPDATE traders_beginners SET fname='$fname', lname='$lname', photo='$photo_name' WHERE id=$user_id";
//     } else {
//         $sql = "UPDATE traders_beginners SET fname='$fname', lname='$lname' WHERE id=$user_id";
//     }

//     mysqli_query($conn, $sql);
//     echo "Profile updated.";
// }

// Получаем текущие данные
$result = mysqli_query($conn, "SELECT * FROM traders_beginners WHERE id=$user_id");
$user = mysqli_fetch_assoc($result);
?>



        <!-- ///photo -->

<!-- <form method="POST" enctype="multipart/form-data">
    <input type="text" name="fname" value="<?= $user['fname'] ?>" required>
    <input type="text" name="lname" value="<?= $user['lname'] ?>" required>
    <input type="file" name="profile_photo">
    <button type="submit" name="update_profile">Save</button>
</form> -->

<?php if (!empty($user['photo'])): ?>
    <img src="uploads/<?= $user['photo'] ?>" alt="Profile Photo" style="width:150px;">
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profitrade Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fb;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
            padding: 20px 30px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-height: 150px;
            width: 220px;
            border: 1px solid goldenrod;
            background-color: #fff;
            border-radius: 10px;
            margin-top: 20px;
        }

        .user-info {
            align-items: center;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            /* border: 1px solid #ccc; */
            /* border-radius: 5px; */
            overflow: hidden;
            margin-bottom: 25px;
        }

        .nav button {
            flex: 1;
            padding: 10px;
            /* border: 1px solid goldenrod; */
            background-color: #f9f9f9;
            color: goldenrod;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.2s ease;
        }

        .nav button:hover {
            background-color: goldenrod;
            color: #fff;
            font-weight: 600;
        }

        .nav button a {
            text-decoration: none;
            color: goldenrod;
        }

        .nav button a:hover {
            background-color: goldenrod;
            color: white;
            font-weight: 600;
        }

        .nav .active {
            background-color: goldenrod;
            color: white;
            font-weight: bold;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .section {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .box {
            flex: 1;
            min-width: 250px;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            border: 1px solid #ddd;
        }

        .white {
            background-color: #ffffff;
        }

        .box h3 {
            font-size: 16px;
            font-weight: 400;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .box a {
            color: #407cb0;
            font-size: 14px;
        }

        .box a:hover {
            text-decoration: none;
        }

        .box p {
            font-size: 14px;
        }

        .box label {
            font-size: 14px;
        }

        .rithmic-password {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #999;
            margin-top: 30px;
        }

        input[type="checkbox"] {
            margin-right: 4px;
        }

        /* /////////////////////////// */
        form { 
            display: grid; 
            gap: 10px; 
        }
        form label{
            font-size: 16px;
            font-weight: 600;
            color: #5a5858;
            margin-top: 10px;
        }
        input { 
            border-radius:6px; 
            padding: 10px; 
            border: 1px solid rgb(188, 185, 185);
        }
        button { 
            border-radius:6px; 
            padding: 10px; 
            font-weight: bold; 
            border: none;
        }

        .success { 
            color: green; 
        }

        .btn_delete { 
            background-color: rgb(251, 91, 91); 
        }
        .btn_edit { 
            background-color: rgb(244, 188, 85); 
            margin-top: 20px;
        }

        .logout{
            border-radius: 6px;
            /* border: 2px solid gray; */
            background-color: gray;
            color: white;
            font-size: 14px;
            font-weight: bold;
            padding: 10px;
            cursor: pointer;
            margin-top:10px;
        }
        .head {
            display:flex; 
            justify-content:space-between; 
            align-items:center;
        }
    </style>
</head>

<body>

    <div class="header">
        <img src="image/logo1.png" alt="Profitrade Logo">
    </div>

    <div class="container">
        <div class="user-info">
            <span>pulka27</span> <a href="#">Logout</a>
        </div>

        <div class="nav">
            <button><a href="dashboard.php">Dashboard</a></button>
            <button>Account SignUp</button>
            <button>Payouts</button>
            <button>Market Depth</button>
            <button>Helpdesk</button>
            <button class="active">Profile</button>
        </div>

        <h2>Profile</h2>

        <div class="section">
            <div class="box">
                
                <div class="box white">
                <form method="POST" action="">
                    <label>Email:</label>
                    <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>

                    <label>Username:</label>
                    <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>

                    <label>First Name:</label>
                    <input type="text" name="fname" value="<?= htmlspecialchars($user['fname']) ?>" required>

                    <label>Last Name:</label>
                    <input type="text" name="lname" value="<?= htmlspecialchars($user['lname']) ?>" required>

                    <button class="btn_edit" type="submit" name="edit">💾 Edit profile</button>
                    <button class="btn_delete" type="submit" name="delete" onclick="return confirm('Are you sure you want to delete your account?')">🗑️ Delete account</button>
                </form>
                </div>

            </div>
        </div>

        <div class="footer">
            Created on <a href="#">the www</a><br>
            © 2025 - Profitrade
        </div>
    </div>

</body>

</html>
