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
<?php
if (!$_SESSION['user']){
    header('Location: ../index.php');
}
?>
<form class="msg">
    <h2 style="margin: 5px">Hello, <?=$_SESSION['user']['login']?>!</h2>
    <h2 style="margin: 5px">Your id is <?=$_SESSION['user']['id']?>!</h2>
    <a href="vendor/logout.php">Logout</a>
</form>
</body>
</html>