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
    <title>Edit</title>
    <link rel="stylesheet" href="../css/editProfile.css">
</head>
<body>
    <div class="title">Edit Profile</div>

    <form action="editProfileProcess.php" method="post" enctype="multipart/form-data">
        <div class="form_content">
            <div class="form_item">
                Nama Depan
                <input type="text" name="nama_depan" value="<?php echo $data["nama_depan"]?>">
            </div>

            <div class="form_item">
                Nama Tengah
                <input type="text" name="nama_tengah" value="<?php echo $data["nama_tengah"]?>">
            </div>

            <div class="form_item">
                Nama Belakang
                <input type="text" name="nama_belakang" value="<?php echo $data["nama_belakang"]?>">
            </div>

            <div class="form_item">
                Tempat Lahir
                <input type="text" name="tempat_lahir" value="<?php echo $data["tempat_lahir"]?>">
            </div>

            <div class="form_item">
                Tanggal Lahir
                <input type="date" name="tgl_lahir" value="<?php echo $data["tgl_lahir"]?>">
            </div>

            <div class="form_item">
                NIK
                <input type="text" name="nik" value="<?php echo $data["nik"]?>">
            </div>

            <div class="form_item">
                Warga Negara
                <input type="text" name="warga_negara" value="<?php echo $data["warga_negara"]?>">
            </div>

            <div class="form_item">
                Email
                <input type="text" name="email" value="<?php echo $data["email"]?>">
            </div>

            <div class="form_item">
                No HP
                <input type="text" name="nomor_handphone" value="<?php echo $data["no_handphone"]?>">
            </div>

            <div class="form_item">
                Alamat
                <input type="text" name="alamat" id="form_item_alamat" value="<?php echo $data["alamat"]?>">
            </div>

            <div class="form_item">
                Kode Pos
                <input type="text" name="kode_pos" value="<?php echo $data["kode_pos"]?>">
            </div>

            <div class="form_item">
                Foto Profil
                <input type="file" name="foto_profil">
            </div>

            <div class="form_item">
                Username
                <div><b>shinhari</b></div>
            </div>

            <div class="form_item">
                Password 1
                <input type="text" name="password1" value="<?php echo $data["password1"]?>">
            </div>

            <div class="form_item">
                Password 2
                <input type="text" name="password2" value="<?php echo $data["password2"]?>">
            </div>
        </div>

        <div class="form_button">
            <a href="profile.php">Kembali</a>
            <input type="submit" name="submit" value="Save">
        </div>
    </form>
</body>
</html>