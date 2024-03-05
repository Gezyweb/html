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
        <h2>Register</h2>
        <form action="#">
            <input type="text" name="newUsername" placeholder="New Username" required><br>
            <input type="password" name="newPassword" placeholder="New Password" required><br>
            <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br>
            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="index.php">Login here</a>.</p>
    </div>
</body>
</html>