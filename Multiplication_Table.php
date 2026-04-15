<?php
$MenuOption = 'Y';
while ($MenuOption == 'Y'){ 

    echo "What is your choice: [0]Two Numbers [1]Complete Multiplication Table: ";$op = trim(fgets(STDIN));
    while (is_numeric($op) == false or $op > 1){
        echo 'ERRO' . PHP_EOL;
        echo "What is your choice: [0]Two Numbers [1]Complete Multiplication Table:  ";$op = trim(fgets(STDIN));
    }

    echo PHP_EOL. 'Desired Number: ';$n1=(int)trim(fgets(STDIN));
    if ($op == 0){
        echo 'Multiply by : ';$n2 = (int)trim(fgets(STDIN));
        echo "\nThe result of $n1 * $n2 = " . $n1*$n2;
    }
    else{
        for($number = 0 ; $number <= 10; $number++)
            echo "$n1 * $number = ". $n1 * $number . PHP_EOL;
    }

    echo PHP_EOL . 'Do you wish to continue: [Y]Yes [N]No: 0'; $MenuOption = strtoupper(trim(fgets(STDIN)));
    while (is_numeric($MenuOption) == true or $MenuOption != 'Y' and $MenuOption != 'N'){
        echo PHP_EOL . 'Continue: '; $MenuOption = strtoupper(trim(fgets(STDIN)));
    }

}

