<?php
    echo "My Name Is Sourav Dhali\n";
    echo "My Name Is "."Sourav Dhali\n";
    print "My Name Is Sourav Dhali\n";
    print "My Name Is "."Sourav Dhali\n";
    printf("My Name Is "."Sourav Dhali\n");

    $firstName = "Sourav";
    $lastName = "Dhali";
    
    $fullName = $firstName ." ". $lastName;  //For string Concatination we use dot operator in php.
    echo "\nMy full name is {$fullName}";
    print "\nMy full name is {$fullName}";
    printf("\nMy full name is %s", $fullName);

    echo "\nMy first name is ".$firstName." and my last name is ".$lastName;
    print "\nMy first name is ".$firstName." and my last name is ".$lastName;
    printf("\nMy first name is %s and my last name is %s.\n\n",$firstName,$lastName);

    //Data Type With Length.
    var_dump($firstName);
    $age = 23;
    $detailsOfVariableAge = var_dump($age);
    print $detailsOfVariableAge;    //Did not print for next time. This function is used to print the properties of the variable.

    $upperCaseFullName = strtoupper($fullName);
    print "\nFull name is $upperCaseFullName";

    $fullName = strtoupper($fullName);    //Puting in to same variable.
    print "\nFull name is $fullName";


    $lowerCaseFulllName = strtolower($fullName);
    print "\nFull name is {$lowerCaseFulllName}.";


?>