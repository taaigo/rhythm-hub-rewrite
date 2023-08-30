<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo import_styling(['default', 'navbar', 'profile-page']) ?>
    <title>taigo.dev - your profile</title>
</head>
<body>
    <?php include '../../elements/navbar.php' ?>
    <div class="container">
        <div class="profile">
            <div class="flex_left">
                <img class="image_profile-image" src="<?php echo "/rhythm-hub/media/profile-images/".find_avatar($_SESSION['user']->id).".png" ?>">
                <div class="text_username"><?php echo $_SESSION["user"]->username ?></div>
            </div>
            <div class="flex_right">
                <a href="./profile_settings/" style="text-decoration: none"><div class="input_button">Edit Profile</div></a>
            </div>
        </div>
    </div>
</body>
</html>