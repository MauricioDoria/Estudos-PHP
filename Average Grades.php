<?php 
$media=0;
echo 'Nome do Aluno: ' ; $aluno = trim(fgets(STDIN));
if (is_numeric($aluno[0]) == true ){
    echo "ERRRo!!! novamente...\n";
    echo 'Nome do Aluno: ' ; $aluno = trim(fgets(STDIN));
    
}

for ($i=1; $i < 5; $i++) {
    echo "\nDigite a primeira a $i ª nota: " ; $nota = (float)trim(fgets(STDIN));
    while (is_numeric($nota) == false){
        echo "\nDigite a primeira a $i ª nota: " ; $nota = (float)trim(fgets(STDIN));
    }
    if ($nota <0 or $nota == null){
        $nota = 0;
    }
    $media += $nota;
    echo $media;
}
$media /= 4;

echo "A media do $aluno é de $media e ele foi  ";
if ($media >= 7 ){
    echo "APROVADO";
} elseif($media >= 5 and $media < 7 ){
    echo "RECUPERAÇÃO";
}else{
    echo "REPROVADO";
}



?>