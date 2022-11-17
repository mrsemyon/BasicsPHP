<?php
session_start();

$pdo = new PDO("mysql:host=127.0.0.1;dbname=basicsphp;charset=utf8", "root", "root");

$statement = $pdo->prepare('SELECT * FROM `users` WHERE `email` = :email');
$statement->execute(['email' => $_POST['email']]);
$result = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($result)) {
    $_SESSION['danger'] = 'Этот адрес уже занят!';
    header("Location: /public/task_13.php");
    die;
}

$statement = $pdo->prepare('INSERT INTO `users` (`email`, `password`) VALUES (:email, :password)');
$statement->execute(['email' => $_POST['email'], 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)]);

$_SESSION['success'] = 'Пользователь успешно добавлен.';
header("Location: /public/task_13.php");
die;
