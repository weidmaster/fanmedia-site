<?php
include_once("permis.php");
if (!empty($nome)) {?>
<link rel="stylesheet" href="quadros.css" type="text/css">
<div id="quadro">
		<form name="frmLogout" action="logout.php" method="post">
		<label><?php echo "$nome"?></label>
		<h4>FanPoints: <?php echo "$fp"?></h4>
		<hr noshade="noshade">
		<a href="javascript:document.forms[0].submit();">Logout</a>
	</form>
	<p></p>
</div>
<?php }else {?>
<link rel="stylesheet" href="quadros.css" type="text/css">
<div id="quadro">
		<p></p>
		<form name="frmLogin" action="login.php" method="post">
		<label>Usuário:</label><input type="text" lenght="20" name="txtLogin" maxlength="255">	
		<label>Senha:</label><input type="password" lenght="20" name="txtPass" maxlength="255">
		<input type="hidden" name="tipo" value="normal">
		<hr noshade="noshade">
		<a href="?p=register">Registrar</a><a href="javascript:document.forms[0].submit();"s>Ok</a>
	</form>
	<p></p>
</div>
<?php }?>