<?php 
$media=0;
for ($i=1; $i < 5; $i++) {
    echo "\nDigite a primeira a $i ª nota: " ; $nota = (int)trim(fgets(STDIN));
    while (is_numeric($nota) == false){
        echo "\nDigite a primeira a $i ª nota: " ; $nota = (int)trim(fgets(STDIN));
    }
    if ($nota <0 or $nota = null){
        $nota = 0;
    }
    $media+=$nota;
    echo $i;
}
$media /= 4;

echo "A media do $aluno é de $media e ele foi  ";
if ($media >= 6 ){
    echo "APROVADO";
} else{
    echo "REPROVADO";
}

?>