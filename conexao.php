<?php

$hostdb = 'localhost';  //host em que esta o banco de dados
$userdb = 'root';       //usuário que tem acesso ao banco de dados
$passdb = '';           //senha do usuário que tem acesso ao banco de dados
$bd = 'db_syschool';    //nome do banco de dados

// $con é um objeto criado com base na classe mysqli onde possui dados relacionados a conexão com o bd
// com esse a podemos manipular o banco.

$con = new mysqli($hostdb,$userdb,$passdb,$bd);
    
    //$con->connect_error = true  ---------- SE DER ERRO (Existe mensagem de erro)
    //$con->connect_error = false ---------- SE NÃO DER ERRO (Não existe mensagem de erro)
    
    if ($con->connect_error) {
        echo "Erro de conexão: " . $con->connect_error;
    }

?>