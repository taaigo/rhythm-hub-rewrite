<?php
session_start();
include '../../../../backend/import.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '/opt/lampp/htdocs/rhythm-hub/backend/import-head.php'?>
    <?php echo import_styling(['default', 'text-models', 'navbar', 'user-settings']) ?>
    <title>taigo.dev - account settings</title>
</head>
<body>
<?php //include '../../../elements/navbar.php' ?>
<nav>
    <ul class="navbar">
        <nav id="settings_back_button">
            <li id="settings_back_button-li">
                <div>
                    <a href="../" style="text-decoration: none"><div class="input_button">Go back</div></a>
                </div>
            </li>
        </nav>
        <div id="vertical-text">
            <li class="navbar" id="settings_navbar-text">Profile settings</li>
        </div>
    </ul>
</nav>
<div class="container">
    <div id="settings-page-profile-image">
        <img id="settings_profile_image" src="/rhythm-hub/media/profile-images/<?php echo $_SESSION['user']->id ?>.png">
    </div>
    <div class="arrange_flex">
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
