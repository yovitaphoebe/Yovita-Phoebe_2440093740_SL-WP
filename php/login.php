<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="title">Login</div>

    <form action="loginProcess.php" method="post">
        <div class="content">
            <div class="content_input">
                Username
                <input type="text" name="username">
            </div>
    
            <div class="content_input">
                Password
                <input type="text" name="password">
            </div>
    
            <div class="content_button">
                <a href="welcome.php">Kembali</a>
                <input type="submit" name="submit" value="Login">
            </div>
        </div>
    </form>
</body>
</html>