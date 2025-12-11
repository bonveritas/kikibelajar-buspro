<?php
    session_start();

    if(isset($_SESSION["user"]) == false){
        header("Location: login.php");
    }

    echo "Hello," . $_SESSION["user"]["username"] . "<br>";
?>