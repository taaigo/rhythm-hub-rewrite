<?php
function redirect($path)
{
    header('Location: '.$_SERVER["REQUEST_SCHEME"].'://'.$_SERVER['HTTP_HOST'].'/rhythm-hub/'.$path);
}