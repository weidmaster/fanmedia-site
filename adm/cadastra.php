<?php
/*Programa que cadastra os dados dos diversos formulários do site Horizonte

DarkSign

2008
*/

$erro='';
//Formulário de Novidade
if ($_GET['mod']=1)
{
	$titulo = $_POST['txtTitulo'];
	$texto = $_POST['txtTexto'];
	if ($titulo == '')
	{ $erro .= 'Campo Requerido em branco: Título.<br>';
	}
	if ($texto == '') { $erro.='Campo Requerido em branco: Texto.<br>'; }
	if ($erro <> '') {
		echo "<link rel='stylesheet' href='../quadros.css' type='text/css'>";
		echo "<div id='quadro' style='margin:auto;'>";
		echo "<h2>Erro!</h1>";
		echo "<p>$erro</p>";
		echo "<meta http-equiv='refresh' content='2;URL=javascript:history.go(-1);'>";
	} else
		{
		//Futuros comandos pra cadastro no BD
		}
	}
?>