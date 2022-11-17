<?php
session_start();

$pdo = new PDO("mysql:host=127.0.0.1;dbname=basicsphp;charset=utf8", "root", "root");

$statement = $pdo->prepare('SELECT * FROM `users` WHERE `email` = :email');
$statement->execute(['email' => $_POST['email']]);
$result = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($result)) {
    if (password_verify($_POST['password'], $result['password'])) {
        $_SESSION['email'] = $result['email'];
        $_SESSION['success'] = 'Авторизация прошла успешно.';
        header("Location: /public/task_16.php");
        die;
    }
}

$_SESSION['danger'] = 'Неверный адрес или пароль!';
header("Location: /public/task_16.php");
die;
