<?php
    $number = 12;

    //if-else
    if($number == 10){
        echo "The number is Ten";
    }
    elseif ($number ==12){
        echo "The number is twelve";
    }
    else{
        echo "This is a number";
    }

    //alternative if-else
    if($number == 10):
        echo "The number is Ten";

    elseif ($number ==12):
        echo "The number is twelve";
    else:
        echo "This is a number";
    endif;

    //Ternary Operator
    $result = ($number>13)? "This is biger" : "This is smaller";
    echo "\nTher Result is : ".$result.".\n";

    $re = ($number>10)? "biger then 10." : (($number>20)? "biger then 20." : "Unknown.");
    echo $re;
?>