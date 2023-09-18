<?php
session_start();
include '../../../backend/import.php';
include '../../../backend/functions/get-songs.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '/opt/lampp/htdocs/rhythm-hub/backend/import-head.php'?>
    <?php echo import_styling(['default', 'navbar', 'text-models', 'song-listing']) ?>
    <title>taigo.dev - song listing</title>
</head>
<body>
    <?php include '../../elements/navbar.php' ?>
    <div class="container">
        <div class="container_top">
            <?php
            if ($_SESSION['user']->id)
            {
                echo '<a href="./submit_song.php">
                        <div class="input_button">Add Song</div> 
                      </a>';
            }
            ?>
        </div>
        <div class="container_content">
            <div class="arrange_flex">
                <?php echo get_songs() ?>
            </div>
        </div>
    </div>
</body>
</html>