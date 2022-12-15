<?php
session_start();
include 'connect.php';
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {
    unset($_SESSION['message']);

    mysqli_query($connect, "INSERT INTO `Users` (`id`, `login`, `password`) VALUES (NULL, $login, $password) ");
} else {
    $_SESSION['message'] = "Passwords isn't confirmed";
    header('Location: ../register.php');
}
?>