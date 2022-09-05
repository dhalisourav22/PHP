<?php
    $students = [
        337=>"Sourav",
        366=>"Sumon",
        354=>"Shuvo"
    ];
    echo $students[366];
    echo "\nThe Length Of This Array Is : ".count($students);

    //Traversing;
    echo "\nThe Traverse of associative array by for each loop : \n";
    foreach($students as $keyIterator => $valueIterator){
        echo "\t\t\t".$keyIterator." = ".$valueIterator."\n";
    }

    echo "\nThe Traverse of associative array by for loop : \n";
    $allKeyByIndex = array_keys($students);
    for($index = 0; $index<count($students); $index++){
        echo "\t\t\t".$allKeyByIndex[$index]." = ".$students[$allKeyByIndex[$index]]."\n";
    }

    echo "\nThe Traverse of associative array by for loop : \n";
    $allKeyByIndex = array_keys($students);
    $allValueByIndex = array_values($students);

    for($index = 0; $index<count($students); $index++){
        echo "\t\t\t".$allKeyByIndex[$index]." = ".$allValueByIndex[$index]."\n";
    }

    //Changing Value;
    $students[366] = "Supti";
    echo "\nAfter changing value : \n";
    foreach($students as $keyIterator => $valueIterator){
        echo "\t\t\t".$keyIterator." = ".$valueIterator."\n";
    }

    $students[366] .= ", Sumi";
    echo "\nAfter changing value : \n";
    foreach($students as $keyIterator => $valueIterator){
        echo "\t\t\t".$keyIterator." = ".$valueIterator."\n";
    }
    
?>