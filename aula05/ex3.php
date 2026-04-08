<?php
$json = file_get_contents("produtos.json");
$produtos = json_decode($json, true);

$produtos[] = ["nome"=>"Boné","preco"=>40,"quantidade"=>7];

file_put_contents("produtos.json", json_encode($produtos));
?>