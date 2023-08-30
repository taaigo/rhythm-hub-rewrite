<?php
session_start();
include '../../../../backend/import.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo import_styling(['default', 'text-models', 'navbar', 'user-settings']) ?>
    <title>taigo.dev - account settings</title>
</head>
<body>
<?php include '../../../elements/navbar.php' ?>
<div class="container">
    <div class="arrange_flex">
        <form action="upload-profile-image.php" method="post" enctype="multipart/form-data">
            <div id="settings_change-profile-image">
                <div class="flex_top-pfp">
                    <div class="text_page-title" id="change-profile-image-title">Change profile picture</div>
                </div>
                <div class="flex_bottom-pfp">
                    <label for="profile-image">Browse image<input type="file" style="display: none" name="profile-image" id="profile-image"></label>
                    <input type="submit" class="input_button" value="Submit" name="submit">
                </div>
            </div>
        </form>
        <div id="settings_change-username">

        </div>
    </div>
</div>
</body>
</html>