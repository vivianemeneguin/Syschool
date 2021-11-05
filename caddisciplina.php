<?php

include 'conexao.php';

$coddisc  = $_POST["txtCodigo"];
$nomedisc = $_POST["txtNomeDisc"];

$stms = $con->prepare("INSERT INTO disciplina(cod_disc, nome_disc) VALUES (?,?)");

// VALUES (?,?)
//         s,s -------- "s" de string
//        ($coddisc,$nomedisc)
$stms->bind_param("ss",$coddisc,$nomedisc);

$stms->execute();

//echo "Erro de sentença: %s . \n" . $stms->error;

$stms->close();

echo "<br>";
echo "<p align='center'>Inclusão efetuada com sucesso!!!</p>";
echo "<br>";
echo "<p align='center'><a href='index.html'>Voltar</a></p>";
echo "<br>";

/*
echo '<h1> Hello World - Teste PHP </h1>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h1> Dados dos formulário de cadastro </h1>';

echo '<h1> Utilizando o array global $_POST </h1>';
echo '<h2>';
echo $_POST["txtCodigo"];
echo '</h2>';
echo '<h2>';
echo $_POST["txtNomeDisc"];
echo '</h2>';

echo '<h1> Utilizando o array global $_GET </h1>';
echo '<h2>';
echo $_GET["txtCodigo"];
echo '</h2>';
echo '<h2>';
echo $_GET["txtNomeDisc"];
echo '</h2>';
*/

?>