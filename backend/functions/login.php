<?php
function login_user()
{
    if ( !empty($_POST['username']) )
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $mysqli = new mysqli("localhost", "root", "", "taigo.dev");
        // check if connects
        if ($mysqli -> connect_errno)
        {
            return "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        if ($result = $mysqli->query($sql))
        {
            if ( $result->num_rows == 1)
            {
                $_SESSION["session_id"] = session_id();
                $_SESSION["user"] = (object) $result->fetch_assoc();
                return 2;
            }
            else
            {
                return 1;
            }
            $result->free_result();
        }
        $mysqli->close();
    }
    else
    {
        return;
    }
}