<?php
session_start();
include '../../../backend/import.php';
include '../../../backend/functions/register.php';

$register_message = register_user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '/opt/lampp/htdocs/rhythm-hub/backend/import-head.php'?>
    <?php echo import_styling(['default', 'text-models', 'navbar', 'register-page']) ?>
    <title>taigo.dev - sign up</title>
</head>
<body>
<?php include '../../elements/navbar.php' ?>
<div class="outside_container">
    <div class="container">
        <form method="post" action="">
            <div class="arrange_flex">
                <div class="flex-top">
                    <?php
                    switch ( $register_message )
                    {
                        case 1:
                            echo '<div class="text_success-text">Successfully created account</div>
                                  <meta http-equiv="refresh" content="1; URL=../profile/" >';
                            break;

                        case 2:
                            echo "<div class='text_error'>Passwords are not the same</div>";
                            break;
                    }

                    ?>
                    <div class="text_page-title">Sign up</div>
                    <input class="input_text-field" placeholder="Username" type="text" name="username">
                    <input class="input_text-field" placeholder="Password" type="password" name="password">
                    <input class="input_text-field" placeholder="Repeat password" type="password" name="repeated-password">
                </div>
                <div class="flex-bottom">
                    <input class="input_button" type="submit" value="Sign up" style="float: right">
                </div>
            </div>
        </form>
    </div>
</div>
</body>