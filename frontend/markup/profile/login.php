<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo import_styling(['default', 'text-models', 'navbar', 'login-page']) ?>
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
                            echo "<div class='error-text'>Combination doesn't exist</div>";
                            break;

                        case 2:
                            echo "<div class='success-text'>Successfully logged in</div>";
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