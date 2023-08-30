<?php
function import_styling($include)
{
    $output = "";
    for ($i = 0; $i < count((array)$include); $i++)
    {
        $output .= '<link rel="stylesheet" href="/rhythm-hub/frontend/styling/'.$include[$i].'.css">';
    }
    return $output;
}