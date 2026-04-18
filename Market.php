<?php 
$Vtotal = 0;
$list = [
    'bean' => 5.50,
    'rice' => 7.00,
    'onion' => 2.50,
    'tomato' => 3.00,
    'coffe' => 8.90,
    'oil'=> 6.30,
    'noodle' => 2.90,
    'milk' => 3.80,
    'bread' => 4.00,
    'sugar' => 4.20 
];

#verificação de produto
while (True){
    echo 'Product: ';$product = strtolower(trim(fgets(STDIN)));
    
    if ($list[$product] == true){
        echo PHP_EOL . 'Units: '; $uni = trim(fgets(STDIN));
        $Vtotal += $list[$product] * $uni;
    }
    else {
        echo PHP_EOL. 'Not Available';
    }
    echo "\nSTOP [Y]";$option = strtoupper(trim(fgets(STDIN)));
    if ($option[0] == 'Y'){
        break;
    }
    
    echo "\n$Vtotal\n";
}
echo "Total Purchase Prince: $Vtotal";
