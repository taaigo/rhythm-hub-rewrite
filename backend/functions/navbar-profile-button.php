<?php
function print_login_button()
{
    if ( empty($_SESSION['user']->id ) )
    {
        return '
        <li style="float: right"><a class="nav" href="/rhythm-hub/frontend/markup/register_user/">Signup</a></li>
        <li style="float: right"><a class="nav" href="/rhythm-hub/frontend/markup/profile/">Login</a></li>';
    }
    else {
        return '<li style="float: right"><a class="nav" href="/rhythm-hub/frontend/markup/global/logout.php">Logout</a></li>
              <li style="float: right"><a style="margin-left: 10px; padding-left: 0" class="nav" href="/rhythm-hub/frontend/markup/profile">
              ' . $_SESSION["user"]->username . '</a></li><a href="/rhythm-hub/frontend/markup/profile"><img class="image_avatar-small-round" src="/rhythm-hub/media/profile-images/' . find_avatar($_SESSION['user']->id) . '.png"></a>';
    }
}