<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '/opt/lampp/htdocs/rhythm-hub/backend/import-head.php'?>
    <?php echo import_styling(['default', 'text-models', 'navbar', 'login-page']) ?>
    <title>taigo.dev - sign in</title>
</head>
<body>
<?php include '../../elements/navbar.php' ?>
<div class="outside_container">
    <div class="container">
        <form method="post" action="">
            <div class="arrange_flex">
                <div class="flex-top">
                    <?php
                    switch ( $login_message )
                    {
                        case 1:
                            echo "<div class='text_error'>Combination doesn't exist</div>";
                            break;

                        case 2:
                            echo "<div class='text_success-text'>Successfully logged in</div>";
                            break;
                    }

                    ?>
                    <div class="text_page-title">Sign in</div>
                    <input class="input_text-field" placeholder="Username" type="text" name="username">
                    <input class="input_text-field" placeholder="Password" type="password" id="passwordInput" name="password">
                    </div>
                    <div class="flex-bottom">
                        <input class="input_button" type="submit" value="Login" style="float: right">
                    </div>
            </div>
        </form>
    </div>
</div>
</body>