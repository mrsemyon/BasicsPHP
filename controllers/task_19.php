<?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=basicsphp;charset=utf8", "root", "root");

if (!is_dir($_SERVER['DOCUMENT_ROOT'] . '/upload/')) mkdir($_SERVER['DOCUMENT_ROOT'] . '/upload/');

if (isset($_GET['del'])) {
    $statement = $pdo->prepare('DELETE FROM images WHERE image=:image');
    $statement->execute(['image' => $_GET['del']]);
    unlink($_SERVER['DOCUMENT_ROOT'] . '/upload/' . $_GET['del']);
}

if (!empty($_FILES['image']['name'])) {
    $imageFile = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/upload/' . $imageFile);

    $statement = $pdo->prepare("INSERT INTO images (image) VALUES (:image)");
    $statement->execute(['image' => $imageFile]);
}

header("Location: /public/task_19.php");
die;
