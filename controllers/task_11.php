<?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=basicsphp;charset=utf8", "root", "root");
$statement = $pdo->prepare('INSERT INTO `info` (`text`) VALUES (:text)');
$statement->execute(['text' => $_POST['text']]);

header("Location: /public/task_11.php");
