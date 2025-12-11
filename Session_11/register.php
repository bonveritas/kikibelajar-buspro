<?php
    include "utils/db.php";

    if(isset($_POST["register"]) == true){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "INSERT INTO users(username, userPassword) VALUES(?, ?);";
        $stmt = mysqli_prepare($conn, $query);
        
        // s = string
        // b = blob
        // f = float
        mysqli_stmt_bind_param(
            $stmt,
            "ss",
            $username,
            $password
        );

        if(mysqli_stmt_execute($stmt) == true){
            header("Location: login.php");
        }
    }
?>

<form action="" method="post">
    Username: <input type="text" name="username" id=""><br>
    Password: <input type="password" name="password" id=""><br>
    <button type="submit" name="register">Register</button>
</form>
<a href="login.php">Redirect to Login</a>