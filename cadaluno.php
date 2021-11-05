<?php

include 'conexao.php';

$matricula  = $_GET["txtMatricula"];
$nomealun   = $_GET["txtNomeAlun"];
$nomemae    = $_GET["txtNomeMae"];
$datanasc   = $_GET["txtDataNasc"];
$endereco   = $_GET["txtEnd"];
$cidade     = $_GET["txtCidade"];
$cep        =$_GET["txtCep"];


$stms = $con->prepare("INSERT INTO aluno(matricula, nome_alu, nome_mae, data_nasc, endereco, cidade, cep) VALUES (?, ?, ?, ?, ?, ?, ?)");

$stms->bind_param("sssssss",$matricula, $nomealun, $nomemae, $datanasc, $endereco, $cidade, $cep);

$stms->execute();

//echo "Erro de sentença: %s . \n" . $stms->error;

$stms->close();

echo "<br>";
echo "<p align='center'>Inclusão efetuada com sucesso!!!</p>";
echo "<br>";
echo "<p align='center'><a href='index.html'>Voltar</a></p>";
echo "<br>";

/*
echo '<h1> Utilizando o array global $_GET </h1>';
echo '<h3>';
echo $_GET["txtMatricula"];
echo '</h3>';
echo '<h3>';
echo $_GET["txtNomeAlun"];
echo '</h3>';
echo '<h3>';
echo $_GET["txtNomeMae"];
echo '</h3>';
echo '<h3>';
echo $_GET["txtDataNasc"];
echo '</h3>';
echo '<h3>';
echo $_GET["txtEnd"];
echo '</h3>';
echo '<h3>';
echo $_GET["txtCidade"];
echo '</h3>';
echo '<h3>';
echo $_GET["txtCep"];
echo '</h3>';
echo '<h3>';
*/

?>