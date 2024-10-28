<?php
session_start();
		$_SESSION["id"]='';
		$_SESSION["nome"]='';
		$_SESSION["fp"]='';
		$_SESSION["permis"]=0;
		$nome=0;
		echo "<link rel='stylesheet' href='quadros.css' type='text/css'>";
		echo "<div id='quadro' style='margin:auto;'>";
		echo "<h2>Processando</h1>";
		echo "<p>Você saiu do sistema</p>";
		echo "<meta http-equiv='refresh' content='2;URL=index.php'>";	
?>