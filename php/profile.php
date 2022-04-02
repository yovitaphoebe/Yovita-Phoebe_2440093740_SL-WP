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
    <title>Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
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

    <div class="title">Profil Pribadi</div>

    <div class="profile_content">
        <div class="profile_item">
            Nama Depan
            <div class="profile_item_answer"> 
                <?php echo $data["nama_depan"]?>
            </div>
        </div>

        <div class="profile_item">
            Nama Tengah
            <div class="profile_item_answer">
                <?php echo $data["nama_tengah"]?>
            </div>
        </div>

        <div class="profile_item">
            Nama Belakang
            <div class="profile_item_answer">
                <?php echo  $data["nama_belakang"]?>
            </div>
        </div>

        <div class="profile_item">
            Tempat Lahir
            <div class="profile_item_answer">
                <?php echo $data["tempat_lahir"]?>
            </div>
        </div>

        <div class="profile_item">
            Tanggal Lahir
            <div class="profile_item_answer">XX-XX-XXXX</div>
        </div>

        <div class="profile_item">
            NIK
            <div class="profile_item_answer">XXXXXXXXXXX</div>
        </div>

        <div class="profile_item">
            Warga Negara
            <div class="profile_item_answer">XXXXXX</div>
        </div>

        <div class="profile_item">
            Email
            <div class="profile_item_answer">XXXXXX</div>
        </div>

        <div class="profile_item">
            No HP
            <div class="profile_item_answer">XXXXXX</div>
        </div>

        <div class="profile_item">
            Alamat
            <div class="profile_item_answer">XXXXXX</div>
        </div>

        <div class="profile_item">
            Kode Pos
            <div class="profile_item_answer">XXXXXX</div>
        </div>

        <div class="profile_item">
            Foto Profil
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data["foto_profil"])?>"
            alt="" style="width: 100px; height: 100px; object-fit: cover">
        </div>
    </div>

    <div class="button" style="display: flex; flex-direction: row; justify-content: center; margin: 20px 100px;">
        <a href="editProfile.php" style="text-decoration: none; margin: 0px 10px; width: 200px; line-height: 30px;
        font-size: 22px; text-align: center;color: black; border-style: solid; border-width: 2px; border-color: black;
        border-radius: 5px; background-color: #fbfdac;">Edit</a>
    </div>
</body>
</html>