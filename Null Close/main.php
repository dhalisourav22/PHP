<?php
   
    $user_value;
    $default_value = 10;
    $result = $user_value ?? $default_value;
    echo "The value is {$result}";

?>