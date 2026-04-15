<?php
$MenuOption = 'Y';
while ($MenuOption == 'Y'){ 

    echo "What is your choice: [0]Two Numbers [1]Complete Multiplication Table: ";$Option = trim(fgets(STDIN));
    while (is_numeric($Option) == false or $Option > 1){
        echo 'ERRO' . PHP_EOL;
        echo "What is your choice: [0]Two Numbers [1]Complete Multiplication Table:  ";$Option = trim(fgets(STDIN));
    }

    echo PHP_EOL. 'Desired Number: ';$Number1=(int)trim(fgets(STDIN));
    if ($Option == 0){
        echo 'Multiply by : ';$Number2 = (int)trim(fgets(STDIN));
        echo "\nThe result of $Number1 * $Number2 = " . $Number1*$Number2;
    }
    else{
        for($number = 0 ; $number <= 10; $number++)
            echo "$Number1 * $number = ". $Number1 * $number . PHP_EOL;
    }

    echo PHP_EOL . 'Do you wish to continue: [Y]Yes [N]No: 0'; $MenuOption = strtoupper(trim(fgets(STDIN)));
    while (is_numeric($MenuOption) == true or $MenuOption != 'Y' and $MenuOption != 'N'){
        echo PHP_EOL . 'Continue: '; $MenuOption = strtoupper(trim(fgets(STDIN)));
    }

}

