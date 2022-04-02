<?php
    session_start();
    include("config.php");

    $strquery = "SELECT * FROM account WHERE username = '".$_SESSION["username"]."'";
    $query = mysqli_query($connection, $strquery);
    $data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <div class="header">
        <div class="header_logo">Aplikasi Pengelolaan Keuangan</div>

        <div class="header_navbar">
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="header_logout">
            <a href="logoutProcess.php">Logout</a>
        </div>
    </div>
    
    <div class="content">
        Halo 
        <b><?php echo $data["nama_depan"], " ", $data['nama_tengah'], " ", $data['nama_belakang'] ?></b>
        , Selamat datang di Aplikasi Pengelolaan Keuangan
    </div>
</body>
</html>