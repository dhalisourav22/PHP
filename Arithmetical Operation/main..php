<?php
    $firstName = "Sourav";
    $secondName = "Dhali";

    $fullName = $firstName.$secondName."\n";

    echo $fullName;

    $num1 = 20;
    $num2 = 5;
    $sum = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;

    print $sum."\n";
    print $sub."\n";
    print $mul."\n";
    print $div."\n";

    $num2++;
    $num1--;

    printf("The Number 1 New value is : %d and the new value of Number 2 is : %d",$num1,$num2);

    $num2 += $num1;
    print "\nThe answer is : ".$num2;

?>
