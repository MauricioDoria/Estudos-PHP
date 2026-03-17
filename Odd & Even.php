<?php 

$Number = []; $Even = []; $Odd = [];

for ($i = 1;$i <6; $i++){
    echo "Digite o $i º numero ";$Number[] = (int)trim(fgets(STDIN));
    echo PHP_EOL;
}
foreach ($Number as $n)
if ($n % 2 == 0){
    $Even[] = $n;
}else{$Odd[] = $n;}
echo 'Temos ' .count($Even) . ' numeros pares e ' . count($Odd) .' numreos impares...' . PHP_EOL;
foreach ($Even as $Even){
    echo " $Even é Par ";
}
echo "\n...\n";
foreach ($Odd as $Odd){
    echo " $Odd é Impar ";
}


?>