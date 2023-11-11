<?php
session_start();

if (!isset($_SESSION['user_data'])) {
    header("location: ../views/login.php");
    exit();
}
