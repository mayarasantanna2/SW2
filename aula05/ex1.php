<?php
$produtos = [
    ["nome"=>"Camiseta","preco"=>30,"quantidade"=>10],
    ["nome"=>"Calça","preco"=>80,"quantidade"=>5],
    ["nome"=>"Tênis","preco"=>200,"quantidade"=>3]
];

$json = json_encode($produtos);
file_put_contents("produtos.json", $json);
?>