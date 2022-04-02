<?php
    session_start();
    include("config.php");

    if(isset($_POST["submit"])){
        if($_POST["password"] != null && $_POST["username"] != null){
            $strquery_select = "SELECT * FROM account WHERE username = '".$_POST["username"]."'";
            $query_select = mysqli_query($connection, $strquery_select);
            $data = mysqli_fetch_array($query_select);
            
            if($data){
                if($data["username"] != $_POST["username"] && $data["password1"] != $_POST["password"]){
                    echo '<script>
                        alert("Failed to login")
                        document.location.href = "login.php"
                    </script>';
                }
                else {
                    $_SESSION["username"] = $_POST["username"];
                    echo '<script> document.location.href = "home.php" </script>';
                }
            }
            else{
                echo '<script>
                    alert("Username not found")
                    document.location.href = "login.php"
                </script>';
            }
        }
        else{
            echo '<script>
                alert("Please fill in Login details")
                document.location.href = "login.php"
            </script>';
        }
    }
?>