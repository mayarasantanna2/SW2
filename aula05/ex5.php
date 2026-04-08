<?php
$nome = "Calça";

$json = file_get_contents("produtos.json");
$produtos = json_decode($json, true);

$novo = [];

foreach($produtos as $p){
    if($p["nome"] != $nome){
        $novo[] = $p;
    }
}

file_put_contents("produtos.json", json_encode($novo));
?>