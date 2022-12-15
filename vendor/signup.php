<?php
session_start();
include 'connect.php';
$login = $_POST['login'];
$password = md5($_POST['password']);
$password_confirm = md5($_POST['password_confirm']);

if ($password === $password_confirm) {
    unset($_SESSION['message']);
    mysqli_query($connect, "INSERT INTO `Users` (`login`, `password`) VALUES ('$login', '$password')");
    mysqli_close($connect);

} else {
    $_SESSION['message'] = "Passwords isn't confirmed";
    header('Location: ../register.php');
}
