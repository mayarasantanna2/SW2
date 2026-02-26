<?php 
for ($i=1; $i <= 5; $i++) { 
    echo $i;
    echo "<br>";
}
echo "<hr>";

$nomes = ['FULANO','CICLANO','BELTRANO','ANDERSON','ANA'];
foreach ($nomes as $indice => $valor){
    echo $valor. "<br>";
}
//echo $nomes[0];

// $qtde =count($nomes);

// for ($i=0; $i < $qtde; $i++) { 
//     echo $nomes[$i];
//     echo "<br>";
// }
// echo "<hr>";


?>