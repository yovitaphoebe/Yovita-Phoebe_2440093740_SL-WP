<?php
    session_start();
    include("config.php");

    if(isset($_POST["submit"])){
        if(($_POST["nama_depan"] != null) && ($_POST["nama_tengah"] != null) && ($_POST["nama_belakang"] != null)
        && ($_POST["tempat_lahir"] != null) && ($_POST["tgl_lahir"] != null) && ($_POST["nik"] != null)
        && ($_POST["warga_negara"] != null) && ($_POST["email"] != null) && ($_POST["nomor_handphone"] != null) 
        && ($_POST["kode_pos"] != null) && ($_POST["password1"] != null) && ($_POST["password2"] != null) ){
            $updateStatus = true;
        
            $namaDepan = $_POST["nama_depan"];
            $namaTengah = $_POST["nama_tengah"];
            $namaBelakang = $_POST["nama_belakang"];
            $tempatLahir = $_POST["tempat_lahir"];
            $tglLahir = $_POST["tgl_lahir"];
            $nik = $_POST["nik"];
            $wargaNegara = $_POST["warga_negara"];
            $email = $_POST["email"];
            $nomorHandphone = $_POST["nomor_handphone"];
            $alamat = $_POST["alamat"];
            $kodePos = $_POST["kode_pos"];
            $username = $_POST["username"];
            $password1 = $_POST["password1"];
            $password2 = $_POST["password2"];
            
            if(containNumeric($namaDepan)){
                echo '<script>alert("Nama Depan can not contain number")</script>';
                $updateStatus = false;
            }
            if(containNumeric($namaTengah)){
                echo '<script>alert("Nama Tengah can not contain number")</script>';
                $updateStatus = false;
            }
            
            if(containNumeric($namaBelakang)){
                echo '<script>alert("Nama Belakang can not contain number")</script>';
                $updateStatus = false;
            }
            
            if(containNumeric($tempatLahir)){
                echo '<script>alert("Tempat Lahir can not contain number")</script>';
                $updateStatus = false;
            }
            
            if(containAlphabet($nik)){
                echo '<script>alert("NIK can not contain alphabet")</script>';
                $updateStatus = false;
            }
            if(strlen($nik)!=16){
                echo '<script>alert("NIK must be 16 numbers")</script>';
                $updateStatus = false;
            }
            
            if(!str_ends_with($email, "@gmail.com")){
                echo '<script>alert("Email must ends with @gmail.com")</script>';
                $updateStatus = false;
            }

            if(containAlphabet($nomorHandphone)){
                echo '<script>alert("No HP can not contain alphabet")</script>';
                $updateStatus = false;
            }

            if(containAlphabet($kodePos)){
                echo '<script>alert("Kode Pos can not contain alphabet")</script>';
                $updateStatus = false;
            }

            if(isset($_FILES["foto_profil"]["name"]) && isset($_FILES["foto_profil"]["tmp_name"])){
                $temp_fotoProfil = $_FILES["foto_profil"]["tmp_name"];
                $fotoProfil = addslashes(file_get_contents($temp_fotoProfil));
            }
            else{
                echo '<script>alert("You have not uploaded Foto Profil")</script>';
                $updateStatus = false;
            }

            if($password1!=$password2){
                echo '<script>alert("Password is not the same")</script>';
                $updateStatus = false;
            }

            if($updateStatus){
                $strquery_update = "UPDATE account SET nama_depan = '".$namaDepan."',
                nama_tengah = '".$namaTengah."',
                nama_belakang = '".$namaBelakang."',
                tempat_lahir = '".$tempatLahir."',
                tgl_lahir = '$tglLahir',
                nik = '".$nik."',
                warga_negara = '".$wargaNegara."',
                email = '".$email."',
                no_handphone = '".$nomorHandphone."',
                alamat = '".$alamat."',
                kode_pos = '".$kodePos."',
                foto_profil = '$fotoProfil',
                password1 = '".$password1."',
                password2 = '".$password2."'
                WHERE username = '".$_SESSION["username"]."'";

                $query_update = mysqli_query($connection, $strquery_update);

                if($query_update){
                    echo '<script>
                        alert("Edit Profile success")
                        document.location.href = "profile.php"
                    </script>';
                }
                else{
                    echo '<script>
                        alert("Failed to update data to database")
                        document.location.href = "editProfile.php"
                    </script>';
                }
            }
            else echo '<script>document.location.href = "editProfile.php"</script>';
        }
        else{
            echo '<script>
                alert("You have to fill all Profile details")
                document.location.href = "editProfile.php"
            </script>';
        }
    }

    function containAlphabet($word){
        for($i=0; $i<strlen($word); $i++){
            if(!is_numeric($word[$i])) return true;
        }
        return false;
    }

    function containNumeric($word){
        for($i=0; $i<strlen($word); $i++){
            if(is_numeric($word[$i])) return true;
        }
        return false;
    }
?>