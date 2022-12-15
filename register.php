<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизація та реєстрація</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<form action="vendor/signup.php" method="POST">
    <label for="">Login</label>
    <input type="text" name="login" placeholder="Enter login">
    <br>
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Enter password">
    <br>
    <label for="">Repeat your password</label>
    <input type="password" name="password_confirm" placeholder="Repeat password">
    <br>
    <button type="submit">Register</button>
    <p>
        If you already have an account you can <a href="/index.php">Sign in</a>
    </p>

        <?php
        if ($_SESSION['message']){
            echo "<p class='msg'>{$_SESSION['message']}</p>";
        }
        ?>
    </p>
</form>

</body>
</html>