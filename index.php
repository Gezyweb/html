<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<div class="TitleBar"><h1>BIOPLUS REPAIR CENTER</h1></div>
<body>
    
    <div class="container">
        <div class="image"> <img src="assets/logo.png" width="200" height="200"></div>
        <h2>Login</h2>
        <form action="" method="post">
                <div class="field input">
                    <input type="text" name="username" placeholder="Username" id="Username" required><br>
                </div>
                <div class="field input">
                    <input type="password" name="password" placeholder="Password" id="Password" required><br>
                </div>
                <div class="field">
                    <input type="submit" name="submit" value="Login">
                </div>
                
            
        </form>
        <div class="links">
            <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        </div>
    </div>
    
</body>
</html>
