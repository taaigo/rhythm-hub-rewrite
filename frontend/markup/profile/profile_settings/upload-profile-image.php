<?php
session_start();
include '../../../../backend/import.php';
include '../../../../backend/functions/settings/upload-profile-image.php';
$upload_message = upload_profile_image();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '/opt/lampp/htdocs/rhythm-hub/backend/import-head.php'?>
    <title>taigo.dev - upload image</title>
    <?php echo import_styling(['default', 'text-models', 'navbar']) ?>
    <style>

        .arrange_flex {
            display: flex;
            height: 40%;
            flex-direction: column;
            justify-content: space-between;
        }

        .flex_bottom {
            height: 50px;
            width: 140px;
            display: flex;
            flex-direction: column;
            justify-content: end;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="arrange_flex">
        <div class="flex_top">
            <?php
            switch ( $upload_message )
            {
                case 1:
                    echo '<div class="text_error">file was not an image</div>';
                    echo '<div class="text_page-title">Your image was not uploaded.</div>';
                    break;

                case 2:
                    echo '<div class="text_error">file size too is large</div>';
                    echo '<div class="text_page-title">Your image was not uploaded.</div>';
                    break;

                case 3:
                    echo '<div class="text_error">unknown error</div>';
                    echo '<div class="text_page-title">Your image was not uploaded.</div>';
                    break;

                case 4:
                    echo '<div class="text_page-title">Your image has successfully been uploaded.</div>';
                    break;

                case 1:
                    echo '<div class="text_error">unknown error</div>';
                    echo '<div class="text_page-title">Your image was not uploaded.</div>';
                    break;
            }
            ?>
        </div>
        <div class="flex_bottom">
            <a href="../../profile/" class="input_button">Go to profile</a>
        </div>
    </div>
</div>
</body>
</html>

