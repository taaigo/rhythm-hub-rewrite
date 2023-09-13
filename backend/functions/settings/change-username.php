<?php
function change_username()
{
    $mysqli = new mysqli("localhost", "root", "", "taigo.dev");

    $new_username = $_POST["new_username"];
    $user_id = $_SESSION["user"]->id;


    $sql = "UPDATE users SET username='".$new_username."' WHERE id=".$user_id."";

    if ($mysqli->query($sql))
    {
        $_SESSION['user']->username = $new_username;
        return 1;
    }
    else
    {
        return 2;
    }
}