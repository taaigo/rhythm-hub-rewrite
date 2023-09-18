<?php
session_start();
include '../../../../backend/import.php';
include '../../../../backend/functions/settings/change-username.php';
$out = change_username();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo import_styling(['default', 'navbar', 'text-models']) ?>
</head>
<body>

<?php include '../../../elements/navbar.php' ?>
<div class="container" style="padding: 22px">
    <div class="items">
        <div class="text_page-title"><?php
            switch ($out)
            {
                case 1:
                    echo '<div class="text_page-title">Successfully changed username</div>';
                    break;

                case 2:
                    echo '<div class="text_page-title">Something went wrong.</div>';
                    break;

                case 3:
                    echo '<div class="text_page-title">Something went wrong.</div><div class="text_error" style="text-align: left">Your new username can\'t be empty</div>';
                    break;

                case 4:
                    echo '<div class="text_page-title">Something went wrong.</div><div class="text_error" style="text-align: left">This username already exists</div>';
                    break;
            }
            ?></div>
        <a href="../"><button class="input_button">Go to profile</button></a>
    </div>
</div>
</body>
</html>