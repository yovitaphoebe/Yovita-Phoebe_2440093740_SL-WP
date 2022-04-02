<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database_name = "aplikasipengelolaanuang";

    $connection = mysqli_connect($server, $username, $password, $database_name);

    if(!$connection){
        echo '<script>
            alert("Database connection error")
            document.location.href = "welcome.php"
        </script>';
    }
?>