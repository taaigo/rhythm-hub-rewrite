<?php
function upload_song()
{
    if ( isset($_POST['title']) && isset($_POST['artist']) && isset($_POST['bpm']))
    {
        $title = $_POST['title'];
        $artist = $_POST['artist'];
        $bpm = $_POST['bpm'];
        $submitter = $_SESSION['user']->id;

        $mysqli = new mysqli("localhost", "root", "", "taigo.dev");

        if ($mysqli -> connect_errno)
        {
            return "Failed to connect to MYSQL: " . $mysqli -> connect_error;
            exit();
        }

        $sql = "INSERT INTO `songs` (title, artist, bpm, submitter_id) VALUES ('".$title."', '".$artist."', '".$bpm."', '".$submitter."')";

        if ($mysqli->query($sql) === TRUE)
        {
            $song_id = $mysqli->insert_id;
            upload_cover($song_id);
            return 'Song upload success';
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $mysqli -> error;
        }
        $mysqli->close();
    }
    else return;
}

function upload_cover($song_id)
{
    $target_dir = "../../../media/song-images/";
    $target_file = $target_dir . basename($song_id.".jpg");
    $uploadOk = 1;
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["cover"]["tmp_name"]);
        if ($check !== false) {
            //    echo "File is an image - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        }
        else
        {
            return "File is not an image.<br>";
            $uploadOk = 0;
        }
    }

// Check file size
    if ($_FILES["cover"]["size"] > 12000000)
    {
        return "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        return "Sorry, your file was not uploaded.<br>";
    }
    else
    {
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file))
        {
            return "The file " . htmlspecialchars(basename($_FILES["cover"]["name"])) . " has been uploaded.";
        }
        else
        {
            return "Sorry, there was an error uploading your file.<br>";
        }
    }
}
