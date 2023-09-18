<?php
include '../../../backend/import.php';
include '../../../backend/functions/upload_song.php';

$output = upload_song();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '/opt/lampp/htdocs/rhythm-hub/backend/import-head.php'?>
    <?php echo import_styling(['default', 'text-models', 'navbar', 'song-submit-page']) ?>
    <title>taigo.dev</title>
</head>
<body>
<?php include '../../elements/navbar.php' ?>

<div class="container">
    <form method="post" action="" enctype="multipart/form-data">
        <div class="arrange_flex">
            <div class="flex_top">
                <div class="text_page-title">Submit song</div>
                <input class="input_text-field" type="text" name="title" placeholder="Title">
                <input class="input_text-field" type="text" name="artist" placeholder="Artist">
                <input class="input_text-field" type="text" name="bpm" placeholder="BPM">
            </div>
            <div class="flex_center">
                <div class="flex_bottom">
                    <label for="songcoverupload">Upload songcover<input id="songcoverupload" style="display: none" type="file" name="cover"></label>
                    <input class="input_button" type="submit">
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
