<?php
session_start();

$pdo = new PDO("mysql:host=127.0.0.1;dbname=basicsphp;charset=utf8", "root", "root");

$statement = $pdo->prepare('SELECT * FROM `info` WHERE `text` = :text');
$statement->execute(['text' => $_POST['text']]);
$result = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($result)) {
    $_SESSION['danger'] = 'The text is already exists in table!';
    header("Location: /public/task_12.php");
    die;
}

$statement = $pdo->prepare('INSERT INTO `info` (`text`) VALUES (:text)');
$statement->execute(['text' => $_POST['text']]);

$_SESSION['success'] = 'The text is successfully added to table.';
header("Location: /public/task_12.php");
die;
