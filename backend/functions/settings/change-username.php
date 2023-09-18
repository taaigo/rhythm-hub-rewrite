<?php
function change_username()
{
    $mysqli = new mysqli("localhost", "root", "", "taigo.dev");

    $new_username = $_POST["new_username"];
    $user_id = $_SESSION["user"]->id;

    if (empty($new_username))
    {
        return 3;
    }

    if ($mysqli->query('SELECT * FROM users WHERE username="'.$new_username.'"')->num_rows) // i hate this \""\\'""'\\'""'\'\\'""\'\\'""'"\''"""\""
    {
        return 4;
    }

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