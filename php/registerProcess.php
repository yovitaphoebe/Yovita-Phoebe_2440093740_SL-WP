<?php
    include("config.php");

    if(isset($_POST["submit"])){
        if(($_POST["nama_depan"] != null) && ($_POST["nama_tengah"] != null) && ($_POST["nama_belakang"] != null)
        && ($_POST["tempat_lahir"] != null) && ($_POST["tgl_lahir"] != null) && ($_POST["nik"] != null)
        && ($_POST["warga_negara"] != null) && ($_POST["email"] != null) && ($_POST["nomor_handphone"] != null) 
        && ($_POST["kode_pos"] != null) && ($_POST["username"] != null) && ($_POST["password1"] != null) 
        && ($_POST["password2"] != null) ){
            $registerStatus = true;
        
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
                $registerStatus = false;
            }
            if(containNumeric($namaTengah)){
                echo '<script>alert("Nama Tengah can not contain number")</script>';
                $registerStatus = false;
            }
            
            if(containNumeric($namaBelakang)){
                echo '<script>alert("Nama Belakang can not contain number")</script>';
                $registerStatus = false;
            }
            
            if(containNumeric($tempatLahir)){
                echo '<script>alert("Tempat Lahir can not contain number")</script>';
                $registerStatus = false;
            }
            
            if(containAlphabet($nik)){
                echo '<script>alert("NIK can not contain alphabet")</script>';
                $registerStatus = false;
            }
            if(strlen($nik)!=16){
                echo '<script>alert("NIK must be 16 numbers")</script>';
                $registerStatus = false;
            }
            
            if(!str_ends_with($email, "@gmail.com")){
                echo '<script>alert("Email must ends with @gmail.com")</script>';
                $registerStatus = false;
            }

            if(containAlphabet($nomorHandphone)){
                echo '<script>alert("No HP can not contain alphabet")</script>';
                $registerStatus = false;
            }

            if(containAlphabet($kodePos)){
                echo '<script>alert("Kode Pos can not contain alphabet")</script>';
                $registerStatus = false;
            }

            if(isset($_FILES["foto_profil"]["name"]) && isset($_FILES["foto_profil"]["tmp_name"])){
                $temp_fotoProfil = $_FILES["foto_profil"]["tmp_name"];
                $fotoProfil = addslashes(file_get_contents($temp_fotoProfil));
            }
            else{
                echo '<script>alert("You have not uploaded Foto Profil")</script>';
                $registerStatus = false;
            }

            if($password1!=$password2){
                echo '<script>alert("Password is not the same")</script>';
                $registerStatus = false;
            }

            if($registerStatus){
                $strquery_insert = "INSERT INTO account VALUES('".$namaDepan."','".$namaTengah."',
                '".$namaBelakang."','".$tempatLahir."','$tglLahir','".$nik."','".$wargaNegara."',
                '".$email."','".$nomorHandphone."','".$alamat."','".$kodePos."','$fotoProfil',
                '".$username."','".$password1."','".$password2."')";

                $query_insert = mysqli_query($connection, $strquery_insert);

                if($query_insert){
                    echo '<script>
                        alert("Register success")
                        document.location.href = "welcome.php"
                    </script>';
                }
                else{
                    echo '<script>
                        alert("Failed to insert data to database")
                        document.location.href = "register.php"
                    </script>';
                }
            }
            else echo '<script>document.location.href = "register.php"</script>';
        }
        else{
            echo '<script>
                alert("You have to fill all Register details")
                document.location.href = "register.php"
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