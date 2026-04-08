<?php 
echo '---ODD & EVEN---' . PHP_EOL; #titulo

$Number = []; $Even = []; $Odd = [];
echo "Digite os numeros separandos por ' , ' :";$txt =trim(fgets(STDIN));
$Number = explode(',' , $txt);
$Number = array_map('intval',$Number);

foreach ($Number as $n){
    echo $n . PHP_EOL;
    if ($n % 2 == 0){
        $Even[] = $n;
    }else{$Odd[] = $n;}
}
echo 'Temos ' .count($Even) . ' numeros pares e ' . count($Odd) .' numreos impares...' . PHP_EOL;
foreach ($Even as $Even){
    echo " $Even é Par ";
}
echo "\n...\n";
foreach ($Odd as $Odd){
    echo " $Odd é Impar ";
}


?>