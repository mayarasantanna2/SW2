<?php
$email = "ana@email.com";

$json = file_get_contents("usuarios.json");
$usuarios = json_decode($json, true);

foreach($usuarios as $u){
    if($u["email"] == $email){
        echo $u["nome"];
    }
}
?>