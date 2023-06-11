<?php

$host = 'localhost';
$user = 'root';
$senha = '';
$db = 'cadastro';


$conexao = new mysqli($host, $user, $senha, $db);

if($conexao->connect_errno){
    //echo "Erro";
}else{
    //echo "Conexão Efetuada com Sucesso!! ";
}

?>