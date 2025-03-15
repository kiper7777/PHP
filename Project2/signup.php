<?php
include_once "database_connection.php";

if(isset($_GET['submit']))
{
   $fname=$_GET['fname'];
   $lname=$_GET['lname'];
   $postcode=$_GET['postcode'];
   $email=$_GET['email'];
   $password=$_GET['password'];
   $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   $sql="INSERT INTO pet_sitters(fname,lname,postcode,email,password) VALUES('$fname','$lname','$postcode','$email','$hashed_password')";

   $res= mysqli_query($conn, $sql);
   if($res)
   {
    echo 'Insert the data successfully';
   }
else{
     echo 'Error. Data not inserted' .mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
    <style></style>

</head>

<body>
    <?php include "header.php" ; 
    ?> 

    <!-- <header>
        <div class="container">
            <h1><a href="/index.html">PetCare</a></h1>
            <nav>
                <ul>
                    <li><a href="#contact">Search Sitters</a></li>
                    <li><a href="#about">Become a Sitter</a></li>
                    <li><a href="#services">Our Services</a></li>
                </ul>
            </nav>
            <div class="auth_buttons">
                <button class="signup" id="signupButton">Sign Up</button>
                <button type="button" class="signin" id="signinButton">Sign In</button>
            </div>
        </div>
    </header> -->

    <main>
        <section class="signup">
            <div>
                <h2>Sign Up</h2>
                <form action="signup.php" method="get" class="signup-form">

                    <div class="user_info">
                        <div>
                            <label for="firstname">First name</label>
                            <input type="text" id="fname" name="fname" required>
                            <span class="message" id="fnameMessage">Enter your first name</span>
                            <span class="error" id="fnameError"></span>
                        </div>

                        <div>
                            <label for="lastname">Last name</label>
                            <input type="text" id="lname" name="lname" required>
                            <span class="message" id="lnameMessage">Enter your last name</span>
                            <span class="error" id="lnameError"></span>
                        </div>
                    </div>

                    <div class="user_info">
                        <div>
                            <label for="postcode">Postcode</label>
                            <input type="text" id="postcode" name="postcode" required>
                            <span class="message" id="postcodeMessage">Enter your password</span>
                            <span class="error" id="postcodeError"></span>
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="">
                            <span class="message" id="emailMessage">For account activation and important updates</span>
                            <span class="error" id="emailError"></span>
                        </div>

                        <div>
                            <label for="password">Create a password</label>
                            <input type="password" id="password" name="password" required>
                            <span class="message" id="passwordMessage">Enter your password</span>
                            <span class="error" id="passwordError"></span>
                        </div>
                    </div>

                    <button type="submit" id="submit" name="submit" onclick="validation()">Complete Sign Up</button>
                    <span class="link">Already have an account? <a href="signin.php">Sign in</a></span>
                </form>

                <script src="formvalidation_signup.js">

                </script>
            </div>
        </section>
    </main>

    <!-- <footer>
        <div class="container">
            <p>&copy; 2023 PetCare. All rights reserved.</p>
        </div>
    </footer> -->

    <?php include "footer.php" ; 
    ?>

    <script src="script.js">
    </script>
</body>

</html>