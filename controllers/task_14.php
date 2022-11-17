<?php
session_start();

$_SESSION['message'] = $_POST['message'];
header("Location: /public/task_14.php");
die;
