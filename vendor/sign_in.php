<?php
session_start();
include 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$user_check = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = '$login' AND `password` = '$password'");
if(mysqli_num_rows($user_check) > 0) {
    $user = mysqli_fetch_assoc($user_check);
    $_SESSION['user'] = [
      "id" => $user['id'],
        "login" => $user['login']
    ];
    header('Location: ../main.php');
}else{
    $_SESSION['message'] = 'Login or password is not correct';
    header('Location: ../index.php');
}