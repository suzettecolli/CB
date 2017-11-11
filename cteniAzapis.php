<?php

function cteniAzapis ($promenna)
{
    $PrvniCast = "texty/";
    $DruhaCast = ".txt";

    $handle = fopen($PrvniCast . $promenna . $DruhaCast, "r");
    $promenna = fread($handle, filesize ($PrvniCast . $promenna . $DruhaCast));
    echo($promenna);
    fclose($handle);
}


?>