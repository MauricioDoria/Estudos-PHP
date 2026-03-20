<?php 
$balance = random_int(10000, 150000) / 100;

echo"AVAILABLE BALANCE: $balance \n" ;

#Sistema de Opção | Option System
echo "What do you want to do\n[0]DEPOSIT\n[1]SAKE\n ";$option = trim(fgets(STDIN));

while (is_numeric($option) == false or $option != 0 and $option != 1){
    echo "What do you want to do\n[0]DEPOSIT\n[1]SAKE\n ";$option = trim(fgets(STDIN));
    }

#Sistema de Saque | Sake System
if ($option == 1){
    echo 'WITHDRAWAL AMOUNT ';$sake=(float)trim(fgets(STDIN));
    
    while ($sake > $balance){
        echo "\nErro\n";
        echo 'WITHDRAWAL AMOUNT ';$sake=(float)trim(fgets(STDIN));
    }
    echo PHP_EOL . 'NEW BALANCE' . PHP_EOL . ($balance - $sake);
}

#Sistema de Deposito | Deposit System
else{
    echo PHP_EOL . 'DEPOSIT AMOUNT ' ;$deposit = (float)trim(fgets(STDIN));
    while ($deposit <= 0){
        echo 'ERRO' . PHP_EOL;
        echo PHP_EOL . 'DEPOSIT AMOUNT ' ;$deposit = (float)trim(fgets(STDIN));
    }

    echo PHP_EOL . 'NEW BALANCE ' . PHP_EOL . ($balance + $deposit);

}








 
?>