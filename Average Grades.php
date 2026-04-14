<?php 
$media=0;
echo 'Student Name: ' ; $aluno = trim(fgets(STDIN));
if (is_numeric($aluno[0]) == true ){
    echo "ERRRo!!! ...\n";
    echo 'Student Name: ' ; $aluno = trim(fgets(STDIN));
    
}

for ($i=1; $i < 5; $i++) {
    echo "\nEnter the $i ª note: " ; $nota = (float)trim(fgets(STDIN));
    while (is_numeric($nota) == false){
        echo "\nEnter the $i ª note: " ; $nota = (float)trim(fgets(STDIN));
    }
    if ($nota <0 or $nota == null){
        $nota = 0;
    }
    $media += $nota;
    echo $media;
}
$media /= 4;

echo "The student '$aluno' has an average of $media and he...  ";
sleep(2);
if ($media >= 7 ){
    echo "Approved";
} elseif($media >= 5 and $media < 7 ){
    echo "Recovery";
}else{
    echo "Failed";
}
echo "\n..";
