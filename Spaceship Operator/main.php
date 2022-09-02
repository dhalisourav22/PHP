<?php

    $x = 7;
    $y = 6;

    $result = $x <=> $y;

    if($result == -1) echo $x." is the smaller number.";
    elseif($result == 0) echo $x." ane ".$y." both are same.";
    else echo $x." is the bigger number.";

?>
