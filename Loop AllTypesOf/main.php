<?php

    //goto
    $i = 1;
    a: echo $i.PHP_EOL;
    $i++;
    if($i<=10){
        goto a;
    }
    echo PHP_EOL;

    //For
    for($i=1; $i<=10; $i++){
        echo $i.PHP_EOL;
    }
    echo PHP_EOL;

    //For(Multiple Steping)
    for($i=1,$j=9; $i<=9; $i++,$j--){
        echo $i." : ".$j.PHP_EOL;
    }
    echo PHP_EOL;

    //While
    $i=1;
    while($i<=10){
        echo $i.PHP_EOL;
        $i++;
    }
    echo PHP_EOL;

    $i=0;
    while(++$i<=10){      //while($i++<10)
        echo $i.PHP_EOL;
    }
    echo PHP_EOL;
 

    //do-while
    $i =1;
    do{
        echo $i.PHP_EOL;
        $i++;
    }while($i<=10);
    echo PHP_EOL;

?>
