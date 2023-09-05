<?php
function get_songs()
{
    $mysqli = new mysqli("localhost", "root", "", "taigo.dev");

    if ($mysqli -> connect_errno)
    {
        $connection_error = "Failed to connect to the Database: " . $mysqli -> connect_error;
        exit();
    }

    $sql = "SELECT * FROM `songs`";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0)
    {
        while ( $row = $result->fetch_assoc() )
        {
            $songs .= '
    <a href="../songs/song.php?id='.$row["id"].'" style="text-decoration: none" "><div class="flex_element" id="songbox">
        <img id="image" src="/rhythm-hub/media/song-images/'.$row["id"].'.jpg"><br>
        <div class="song_header" id="songbox">
            <div class="song_info">
                <div class="song_title">'.$row["title"].'</div>
                <div class="song_artist">by '.$row["artist"].'</div>
            </div>
            <div class="song_bpm">'.$row["bpm"].' bpm</div>
        </div>
        </div></a>';
        }
        return $songs;
    }
}