<?php
function find_avatar($user_id)
{
    if (file_exists("/opt/lampp/htdocs/rhythm-hub/media/profile-images/".$user_id.".png"))
    {
        return $user_id;
    }
    else
    {
        return "default";
    }
}