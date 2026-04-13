<?php 
$Vtotal = 0;
$list = [
    'feijão' => 5.50,
    'arroz' => 7.00,
    'cebola' => 2.50,
    'tomate' => 3.00,
    'café' => 8.90,
    'oleo'=> 6.30,
    'macarrão' => 2.90,
    'leite' => 3.80,
    'pão' => 4.00,
    'açucar' => 4.20 
];
while (True){
    echo 'Product: ';$product = strtolower(trim(fgets(STDIN)));
    
    if ($list[$product] == true){
        echo PHP_EOL . 'Units: '; $uni = trim(fgets(STDIN));
        $Vtotal += $list[$product] * $uni;
    }
    else {
        echo PHP_EOL. 'Not Available';
    }
    echo "\nPARAR [s]";$option = strtoupper(trim(fgets(STDIN)));
    if ($option[0] == 'S'){
        break;
    }
    
    echo "\n$Vtotal\n";
}
echo "Valor total da compra foi de $Vtotal";




?>