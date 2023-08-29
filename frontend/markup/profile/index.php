<?php
session_start();
include '../../../backend/import.php';
include '../../../backend/functions/login.php';
$login_message = login_user();

if (empty($_SESSION['user']->id))
{
    include "./login.php";
}
else
    {
    include "./profile.php";
}
?>

