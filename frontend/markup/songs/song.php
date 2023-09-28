<?php
session_start();
include '../../../backend/import.php';
include '../../../backend/functions/get-comments.php';
$id = $_GET["id"];

$mysqli = new mysqli("localhost", "root", "", "taigo.dev");
$sql = "SELECT * FROM songs WHERE id='$id'";

if ($result = $mysqli->query($sql))
{
    $song = (object) $result->fetch_assoc();
}

$sql = "SELECT * FROM users WHERE id='$song->submitter_id'";

if ($result = $mysqli->query($sql))
{
    $submitter = (object) $result->fetch_assoc();
}

$_SESSION['song_id'] = $song->id;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include '/opt/lampp/htdocs/rhythm-hub/backend/import-head.php'?>
    <?php echo import_styling(['default', 'navbar', 'text-models', 'song-page']); ?>
    <script src="functions.js"></script>
</head>
<body>
<?php include '../../elements/navbar.php' ?>
<div class="container">
    <div class="song_information_box">
        <div class="song_top">
            <img class="song_image" src="../../../media/song-images/<?php echo $song->id ?>.jpg">
            <div class="input_button" style="padding: 10px; height: fit-content">Cheer! <?php echo $song->cheers ?></div>
        </div>
        <div class="text_page-title" style="margin: 0 10px"><?php echo $song->title ?></div>
        <div class="text_sub" style="margin: 0 10px">by <?php echo $song->artist?></div>
        <div class="usercard_uploader">
            <img class="usercard_uploader_image" src="../../../media/profile-images/<?php echo find_avatar($submitter->id) ?>.png">
            <div class="upload_info">
                <div class="text_sub">Submitted by:<br><?php echo $submitter->username ?></div>
                <div class="text_sub_grey">on <?php echo $song->date ?></div>
            </div>
        </div>
        <?php
            if (file_exists(get_files_by_extension("../../../media/song-audio/".$_SESSION['song_id']."", "flac,mp3,m4a,ogg")))
            {
                echo '
             <div class="song_audio-card">
            <audio id="audio-player" src="'.get_files_by_extension("../../../media/song-audio/".$_SESSION['song_id'], "flac,mp3,m4a,ogg").'"></audio>
            <div class="song_audio-player-container">
                <button id="play-button" class="input_button" onclick="play_song()">Play</button>
            </div>

            </div>
                ';
            }
            else
            {
                echo '<div  class="text_sub">There is no audio avalible for this song.</div>';
            }
        ?>
    </div>
</div>
<div class="container" style="margin-top: 16px">
    <form action="../../../backend/functions/upload_comment.php" method="post">
        <div class="comment_section">
            <div class="input_comment" id="commentsong">
                <?php
                if ($_SESSION['user']->id)
                {
                    echo '
                        <input class="input_text-field" type="text" name="comment" placeholder="Write a comment">
                        <input class="input_button" type="submit" value="Post">
                    ';
                }
                else
                {
                    echo '
                        <div class="text_page-title">You must be logged in to comment</div>
                    ';
                }
                ?>

            </div>
                <?php echo get_comments($song->id) ?>
        </div>
    </form>
</div>
</body>
</html>