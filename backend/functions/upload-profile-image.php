<?php
function upload_profile_image()
{
    $target_dir = "/opt/lampp/htdocs/rhythm-hub/media/profile-images/";
    $target_file = $target_dir . basename($_SESSION['user']->id.".png");
    $upload_ok = 1;
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // check if real image
    if (isset($_POST['submit']))
    {
        $check = getimagesize($_FILES['profile-image']['tmp_name']);
        if ($check !== false)
        {
            $upload_ok = 1;
        }
        else
        {
            return 1; // return file is not an image
            $upload_ok = 0;
        }
    }

    // check file size
    if ($_FILES['profile-image']['size'] > 12000000)
    {
        return 2; // return file size too large
        $upload_ok = 0;
    }

    if ($upload_ok == 0)
    {
        return 3; // file not uploaded
    }
    else
    {
        if (move_uploaded_file($_FILES['profile-image']['tmp_name'], $target_file))
        {
            return 4; // file upload success
        }
        else
        {
            return 5; // error uploading file
        }
    }
}