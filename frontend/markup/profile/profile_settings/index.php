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
<?php //include '../../../elements/navbar.php' ?>
<nav>
    <ul class="navbar">
        <li class="navbar">Profile settings</li>
    </ul>
</nav>
<div class="container">
    <div class="arrange_flex">
        <div id="settings_back_button">
            <a href="../" style="text-decoration: none"><div class="input_button">Go back</div></a>
        </div>
        <form action="upload-profile-image.php" method="post" enctype="multipart/form-data">
            <div id="settings_change-profile-image">
                <div class="flex_top-pfp">
                    <div class="text_page-title" id="change-profile-image-title">Change profile picture</div>
                </div>
                <div class="flex_center">
                    <div class="flex_bottom-pfp">
                        <label for="profile-image" style="width: 150px">Browse image<input type="file" style="display: none" name="profile-image" id="profile-image"></label>
                        <input type="submit" class="input_button" value="Submit" name="submit" style="width: 150px">
                    </div>
                </div>
            </div>
        </form>
        <form action="change-username.php" method="post" enctype="multipart/form-data">
            <div id="settings_change-username">
                <div class="flex_top-username">
                    <div class="text_page-title">Change username</div>
                </div>
                <div class="flex_bottom-username">
                    <input class="input_text-field" type="text" placeholder="New username" name="new_username">
                    <input class="input_button" type="submit" value="Submit">
                </div>
            </div>
        </form>
        <div id="settings_footer">
            <div class="text_sub" id="settings_userid_text">UserID: <?php echo $_SESSION['user']->id ?></div>
        </div>
    </div>
</div>
</body>
</html>
