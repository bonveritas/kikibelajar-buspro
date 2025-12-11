<?php
    include "utils/db.php";

    session_start();

    if(isset($_POST["login"]) == true){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $remember = isset($_POST["remember"]) && $_POST["remember"] == "on";

        $query = "SELECT userId, username, userPassword FROM users WHERE username = ?;";
        $stmt = mysqli_prepare($conn, $query);

        // s = string
        // b = blob
        // f = float
        mysqli_stmt_bind_param(
            $stmt,
            "s",
            $username
        );

        if(mysqli_stmt_execute($stmt) == true){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);

                if($row["userPassword"] == $password){
                    $_SESSION["user"] = [
                        "userId" => $row["userId"],
                        "username" => $row["username"]
                    ];

                    if($remember == true){
                        setcookie(
                            "userId",
                            $row["userId"],
                            time() + 7 * 3600,
                            "/"
                        );
                    }
                }
            }
        }
    }
?>

<form action="" method="post">
    Username: <input type="text" name="username" id=""><br>
    Password: <input type="password" name="password" id=""><br>
    <button type="submit" name="register">Register</button>
</form>
<a href="login.php">Redirect to Login</a>


<form action="" method="post">
    Username: <input type="text" name="username" id=""><br>
    Password: <input type="password" name="password" id=""><br>
    <input type="checkbox" name="remember" id=""> Remember me <br>
    <button type="submit" name="login">Login</button>
</form>
<a href="register.php">Redirect to Register</a>