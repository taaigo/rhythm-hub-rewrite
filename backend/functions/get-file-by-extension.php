<?php
function get_files_by_extension($directory, $extensions)
{
    $output = '';
    $files = glob($directory."*.{".$extensions."}", GLOB_BRACE);

    for ($i = 0; $i < count($files); $i++)
    {
        $output .= $files[$i];
    }
    return $output;
}