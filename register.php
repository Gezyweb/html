<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<div class="TitleBar"><h1>BIOPLUS REPAIR CENTER</h1></div>
<body>
    <div class="container">
        <div class="image"> <img src="assets/logo.png" width="200" height="200"></div>
        <?php
            include("php/config.php");
            if(isset($_POST["submit"])){
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                

                $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email = '$email'");
            if(mysqli_num_rows($verify_query) !=0){
                echo "<div class='message'>
                        <p>This email is used, Try anther one Please!</p>
                    </div><br>";
                echo"<a href = 'javascript:self.history.back()'><button class='btn'>Go Back </button>";
            }
            else{

                mysqli_query($con,"INSERT INTO users(username,email,password) VALUES('$username','$email','$password')") or die("Error Occurred");
                
                echo "<div class='message'>
                        <p>Registration Successfully!</p>
                    </div><br>";
                echo"<a href = 'index.php'><button class='btn'>Login Now</button>";
            }
            } else{
        ?>

        <h2>Register</h2>
        <form action="" method="post">
            <input type="text" name="newUsername" placeholder="New Username" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="Password" placeholder="Password" required><br>
            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="index.php">Login here</a>.</p>
        <?php } ?>
    </div>
</body>
</html>