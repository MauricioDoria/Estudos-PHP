<?php
$mop = 'S';
while ($mop == 'S'){ 

    echo "Qual é a sua opção: [0]DOIS NUMEROS [1]TABELA COMPLETA: ";$op = trim(fgets(STDIN));
    while (is_numeric($op) == false or $op > 1){
        echo "Qual é a sua opção: [0]DOIS NUMEROS [1]TABELA COMPLETA: ";$op = trim(fgets(STDIN));
    }

    echo PHP_EOL. 'Numero desejado: ';$n1=(int)trim(fgets(STDIN));
    if ($op == 0){
        echo 'Multiplicado por : ';$n2 = (int)trim(fgets(STDIN));
        echo "\nO resultado entre $n1 * $n2 = " . $n1*$n2;
    }
    else{
        for($number = 0 ; $number <= 10; $number++)
            echo "$n1 * $number = ". $n1 * $number . PHP_EOL;
    }

    echo 'Deseja continuar: '; $mop = strtoupper(trim(fgets(STDIN)));
    while (is_numeric($mop) == true or $mop != 'S' and $mop != 'N'){
        echo 'Deseja continuar: '; $mop = strtoupper(trim(fgets(STDIN)));
    }

}


?>