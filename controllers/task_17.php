<?php
session_start();

session_destroy();

header("Location: /public/task_17.php");
die;
