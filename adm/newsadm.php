<link rel="stylesheet" href="../quadros.css" type="text/css">
<link rel="stylesheet" href="../news.css" type="text/css">
<div id="quadro">
	<h2>Novidades</h2>
	<p>Adicione uma novidade digitando as informações abaixo:</p>
	<!-- Formulário de Cadastro de Novidades -->
	<form name="frmNovidades" action="cadastra.php?mod=1" method="post">
		<p>Título:<br>
		<input type="text" id="titulo" name="txtTitulo" size="40" maxlength="255"></p>
		<p>Texto:<br>
		<textarea name="txtTexto" id="texto" cols="40" rows="5"></textarea></p>
		<hr noshade="noshade">
		<a href="javascript:document.forms[0].submit();">Cadastrar</a>
		<p></p>
	</form>
</div>
<?php
include_once("news.php");
?>