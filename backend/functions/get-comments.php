<?php
function get_comments($song_id)
{
    $mysqli = new mysqli("localhost", "root", "", "taigo.dev");

    $sql = "SELECT * FROM song_comments WHERE song='$song_id'";

    $out = "";
    $result = $mysqli->query($sql);
    if ($result -> num_rows > 0)
    {
        while ($comment = $result -> fetch_object())
        {
            $user = fetchUser($comment->user);
            $out .= '
                <div class="comment_content">
                   <div id="head">
                        <div id="user">
                            <img class="comment_user_image" src="../../../media/profile-images/'.find_avatar($user->id).'.png">
                            <div class="username">'.$user->username.'</div>
                        </div>
                        <div id="date">'.$comment->date.'</div>
                    </div>
                    <div id="content">
                        '.$comment->content.'
                    </div>
                </div>
            ';
        }
        return $out;
    }
}

function fetchUser($user_id)
{
    $mysqli = new mysqli("localhost", "root", "", "songs");
    $sql = "SELECT * FROM users WHERE id='$user_id'";
    $user = $mysqli->query($sql)->fetch_object();
    return $user;
}