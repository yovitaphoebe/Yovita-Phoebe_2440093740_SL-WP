<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="title">Register</div>

    <form action="registerProcess.php" method="post" enctype="multipart/form-data">
        <div class="form_content">
            <div class="form_item">
                Nama Depan
                <input type="text" name="nama_depan">
            </div>

            <div class="form_item">
                Nama Tengah
                <input type="text" name="nama_tengah">
            </div>

            <div class="form_item">
                Nama Belakang
                <input type="text" name="nama_belakang">
            </div>

            <div class="form_item">
                Tempat Lahir
                <input type="text" name="tempat_lahir">
            </div>

            <div class="form_item">
                Tanggal Lahir
                <input type="date" name="tgl_lahir">
            </div>

            <div class="form_item">
                NIK
                <input type="text" name="nik">
            </div>

            <div class="form_item">
                Warga Negara
                <input type="text" name="warga_negara">
            </div>

            <div class="form_item">
                Email
                <input type="text" name="email">
            </div>

            <div class="form_item">
                No HP
                <input type="text" name="nomor_handphone">
            </div>

            <div class="form_item">
                Alamat
                <input type="text" name="alamat" id="form_item_alamat">
            </div>

            <div class="form_item">
                Kode Pos
                <input type="text" name="kode_pos">
            </div>

            <div class="form_item">
                Foto Profil
                <input type="file" name="foto_profil">
            </div>

            <div class="form_item">
                Username
                <input type="text" name="username">
            </div>

            <div class="form_item">
                Password 1
                <input type="text" name="password1">
            </div>

            <div class="form_item">
                Password 2
                <input type="text" name="password2">
            </div>
        </div>

        <div class="form_button">
            <a href="welcome.php">Kembali</a>
            <input type="submit" name="submit" value="Register">
        </div>
    </form>
</body>
</html>