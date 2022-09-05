<?php
    $gVar = 10;
    function ds22(){
        $lVar = 5;
        echo $lVar.PHP_EOL;

        global $gVar;
        echo $gVar.PHP_EOL;

        echo $GLOBALS["gVar"].PHP_EOL;

    }
    ds22();

    function ds33(){
        global $gVar;
        $gVar = 5;
    }
    echo $gVar;