<?php 
echo '---ODD & EVEN---' . PHP_EOL; #titulo

$Number = []; $Even = []; $Odd = [];
echo "Enter numbers separated by ' , ': ";$txt =trim(fgets(STDIN));
$Number = explode(',' , $txt);
$Number = array_map('intval',$Number);#transforma em Inteiro | Convert to integer

foreach ($Number as $num){
    echo $n . PHP_EOL;
    if ($n % 2 == 0){
        $Even[] = $num;
    }else{$Odd[] = $num;}
}
echo 'We have ' .count($Even) . ' even numbers and ' . count($Odd) .' odd numbers...' . PHP_EOL;
foreach ($Even as $Even){
    echo " $Even is Even ";
}
echo "\n...\n";
foreach ($Odd as $Odd){                                
    echo " $Odd is Odd ";
}

