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
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $verify_query = mysqli_query($con,"SELECT email FROM users WHERE email = '$email'");
                if(mysqli_num_rows($verify_query) !=0){
                    echo "<div class='message'>
                            <p>This email is used, Try another one Please!</p>
                        </div><br>";
                    echo"<a href = 'javascript:self.history.back()'><button class='btn'>Go Back </button>";
                }
                else{
                    mysqli_query($con, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')") or die("Error Occured");
                        echo "<div class='message'>
                                <p>Registration Successful!</p>
                            </div><br>";
                        echo"<a href = 'index.php'><button class='btn'>Login Now</button>";

                }
            } else {
        ?>


        <h2>Register</h2>
        <form action="" method="post">
            <input type="username" name="username" id="username" placeholder="username" required><br>
            <input type="email" name="email" id="email" placeholder="email" required><br>
            <input type="password" name="password" id="password" placeholder="password" required><br>
            <input type="submit" class="btn" name="submit" value="Register" required>
        </form>
        <p>Already have an account? <a href="index.php">Login here</a>.</p>
        
    </div>
    <?php } ?>
    
</body>
</html>