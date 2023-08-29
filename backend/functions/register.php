<?php
function register_user()
{
    if ( isset($_POST['username']) )
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $repeatedpwd = md5($_POST['repeated-password']);

        if (!strcmp($password, $repeatedpwd) == 0)
        {
            return 2;
        }

        $mysqli = new mysqli("localhost", "root", "", "songs");

        if ($mysqli -> connect_errno)
        {
            return "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        if (!isset($username) || $password === md5(""))
        {
            return;
        }

        $sql = "INSERT INTO users (username, password)
            VALUES ('".$username."', '".$password."')";

        if ($mysqli->query($sql) === TRUE)
        {
            $user_id = $mysqli->insert_id;
            $sql = "SELECT * FROM users WHERE id='$user_id'";
            $_SESSION["user"] = (object) $mysqli->query($sql)->fetch_assoc();
            return 1;
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $mysqli -> error;
        }
        $mysqli->close();
    }
    $_SESSION["session-id"] = session_id();
}