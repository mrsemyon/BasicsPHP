<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['count']++;
} else if (isset($_POST['reset'])) {
    unset($_SESSION['count']);
}

header("Location: /public/task_15.php");
die;
