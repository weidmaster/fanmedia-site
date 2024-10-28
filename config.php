<?php
//Script para configura��o do banco de dados do site Horizonte
$site = "http://www.horizonte.totalh.com"; // URL do site hospedado

$host = "mysql"; // Host do site

$usuariodb="root"; //Usuario de Conexao com  o MySQL

$senhadb="password"; // Senha de Conexao com o MySQL

$db="fanmedia"; //Banco de Dados MySQL

$tb1="users"; // Tabela de usu�rios

$tb2="news"; // Tabela de novidades

//$nnoticias="5"; // Coloque aqui o n�de noticias exibidas por vez

$conexao=mysqli_connect ("$host", "$usuariodb", "$senhadb") or die ('N�o pude me conectar ao banco porque: ' . mysqli_connect_error());
mysqli_select_db ($conexao, "$db") or die("n�o foi possivel");
?>
