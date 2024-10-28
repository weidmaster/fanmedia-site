<?php
session_start();
//Pagina que recupera o login
$login=$_POST['txtLogin'];
$pass=$_POST['txtPass'];
$tipo=$_POST['tipo'];
if (empty($login) || empty($pass)) {
	echo "<link rel='stylesheet' href='quadros.css' type='text/css'>";
	echo "<div id='quadro' style='margin:auto;'>";
	echo "<h2>Erro: Requerido</h1>";
	echo "<p>Alguns dados requeridos não foram preenchidos</p>";
	echo "<meta http-equiv='refresh' content='2;URL=javascript:history.go(-1);'>";
} else {
	include_once("config.php");
	$sql = mysqli_query($conexao, "SELECT * FROM $tb1 WHERE nick='$login' && pass='$pass'");
	$reg = mysqli_fetch_array($sql);
	if (!empty($reg)) {
			if ($tipo=='adm' && $reg['permis']>0 ) {
				$_SESSION["id"]=$reg["id"];
				$_SESSION["nome"]=$reg["nome"];
				$_SESSION["fp"]=$reg["fp"];
				$_SESSION["permis"]=$reg["permis"];
				echo "<link rel='stylesheet' href='quadros.css' type='text/css'>";
				echo "<div id='quadro' style='margin:auto;'>";
				echo "<h2>Processando</h1>";
				echo "<p>Aguarde, estamos processando a requisição</p>";
				echo "<meta http-equiv='refresh' content='2;URL=index.php?p=admin'>";
			} else {
				if ($tipo=='normal') {
				$_SESSION["id"]=$reg["id"];
				$_SESSION["nome"]=$reg["nome"];
				$_SESSION["fp"]=$reg["fp"];
				$_SESSION["permis"]=$reg["permis"];
				echo "<link rel='stylesheet' href='quadros.css' type='text/css'>";
				echo "<div id='quadro' style='margin:auto;'>";
				echo "<h2>Processando</h1>";
				echo "<p>Aguarde, estamos processando a requisição</p>";
				echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
			} else {
				echo "<link rel='stylesheet' href='quadros.css' type='text/css'>";
				echo "<div id='quadro' style='margin:auto;'>";
				echo "<h2>Erro: Negado</h1>";
				echo "<p>Negada a solicitação</p>";
				echo "<meta http-equiv='refresh' content='2;URL=index.php?p=admin'>";
				}
			}
			}
else {
	echo "<link rel='stylesheet' href='quadros.css' type='text/css'>";
	echo "<div id='quadro' style='margin:auto;'>";
	echo "<h2>Erro: Negado</h1>";
	echo "<p>Negada a solicitação</p>";
	echo "<meta http-equiv='refresh' content='2;URL=javascript:history.go(-1);'>";
}
}
?>