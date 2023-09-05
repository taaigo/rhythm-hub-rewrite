<?php
session_start();
if ($_SESSION['user']->id)
{
    include "./song_submit_content.php";
}
else
{
    include '../global/not_logged_in.php';
}