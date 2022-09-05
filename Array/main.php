<?php
    $id = array(337,373,366,354); 
    $students =["Sourav","Sumi","Sumon","Shuvo"];
    echo "Traversing from starting : ";
    for ($i = 0; $i<count($students); $i++){
        echo "\n\t\tThe Number ".($i+1)." Item Is : ".$students[$i];
    }
    echo "\n\nTraversing from ending : ";
    for ($i = count($students)-1; $i>=0; $i--){
        echo "\n\t\tThe Number ".($i+1)." Item Is : ".$students[$i];
    }

    echo "\n\nThe details of this array is : \n";
    echo var_dump($students);

    array_pop($students);
    echo "\nTraversing from starting(After pop for the first time) : ";
    for ($i = 0; $i<count($students); $i++){
        echo "\n\t\tThe Number ".($i+1)." Item Is : ".$students[$i];
    }
    $popingItem = array_pop($students);
    echo "\nTraversing from starting(After pop for the second time) : ";
    for ($i = 0; $i<count($students); $i++){
        echo "\n\t\tThe Number ".($i+1)." Item Is : ".$students[$i];
    }
    echo "\nThe poping item is : ".$popingItem;

    array_shift($students);
    echo "\n\nTraversing from starting(After shift for the first time) : ";
    for ($i = 0; $i<count($students); $i++){
        echo "\n\t\tThe Number ".($i+1)." Item Is : ".$students[$i];
    }

    array_unshift($students, "Juthi", "Supti");
    echo "\n\nTraversing from starting(After unshift for the first time) : ";
    for ($i = 0; $i<count($students); $i++){
        echo "\n\t\tThe Number ".($i+1)." Item Is : ".$students[$i];
    }

    array_push($students, "Rio", "Shihab");
    echo "\n\nTraversing from starting(After push for the first time) : ";
    for ($i = 0; $i<count($students); $i++){
        echo "\n\t\tThe Number ".($i+1)." Item Is : ".$students[$i];
    }

    $students[] = "Sadia";
    echo "\n\nTraversing from starting(After shift for the first time) : ";
    for ($i = 0; $i<count($students); $i++){
        echo "\n\t\tThe Number ".($i+1)." Item Is : ".$students[$i];
    }