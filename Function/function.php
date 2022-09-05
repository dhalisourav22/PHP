<?php
    function add( int ...$numbers):int{
        $result = 0;
        for($i = 0; $i<count($numbers); $i++){
            $result += $numbers[$i];
        }
        return $result;
    }