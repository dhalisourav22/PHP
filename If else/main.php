<?php
    $number = 12;

    //if-else
    if($number == 10){
        echo "The number is Ten";
        echo PHP_EOL;
    }
    elseif ($number ==12){
        echo "The number is twelve";
        echo PHP_EOL;     //Used for new line. This is a constant of php.
    }
    else{
        echo "This is a number";
        echo PHP_EOL;
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
