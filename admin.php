<?php
include_once("permis.php");
if (isset($adm)) {
include_once("display.php");
//Menu de Administração
?>
<div id="quadro">
	<div id="menu2">
	<h2>Administração</h2>
	<?php if (strstr($permis,'1') <> '') {?>
		<a href="?p=admnews">Novidades</a>
	<?php } ?>
		<?php if (strstr($permis,'2') <> '') {?>
		<a href="?p=admusers">Usuários</a>
	<?php } ?>
		<?php if (strstr($permis,'3') <> '') {?>
		<a href="?p=admpartner">Parceiros</a>
	<?php } ?>
		<?php if (strstr($permis,'4') <> '') {?>
		<a href="?p=admfaq">F.A.Q.</a>
	<?php } ?>
		<?php if (strstr($permis,'5') <> '') {?>
		<a href="?p=admpacks">Packs CCG</a>
	<?php } ?>
		<?php if (strstr($permis,'6') <> '') {?>
		<a href="?p=admpromo">Promo CCG</a>
	<?php } ?>
		<?php if (strstr($permis,'7') <> '') {?>
		<a href="?p=admeps">Episódios</a>
	<?php } ?>
		<?php if (strstr($permis,'8') <> '') {?>
		<a href="?p=admamvs">AMVs</a>
	<?php } ?>
		<?php if (strstr($permis,'9') <> '') {?>
		<a href="?p=admfanarts">Fanarts</a>
	<?php } ?>
		<?php if (strstr($permis,'10') <> '') {?>
		<a href="?p=admfanfics">Fanfics</a>
	<?php } ?>
		<?php if (strstr($permis,'11') <> '') {?>
		<a href="?p=admavatars">Avatares</a>
	<?php } ?>
		<?php if (strstr($permis,'12') <> '') {?>
		<a href="?p=admsigs">Sigs</a>
	<?php } ?>
		<?php if (strstr($permis,'13') <> '') {?>
		<a href="?p=admwall">Wallpapers</a>
	<?php } ?>
	</div>
</div>
<?php } else { ;?>
<link rel="stylesheet" href="quadros.css" type="text/css">
<div id="quadro">
	<h2>Apenas para Administradores</h2>
	<p>Entre com seus dados abaixo:</p>
		<form name="frmAdm" action="login.php" method="post">
		<label>Usuário:</label><input type="text" lenght="20" name="txtLogin" maxlength="255">	
		<label>Senha:</label><input type="password" lenght="20" name="txtPass" maxlength="255">
		<input type="hidden" name="tipo" value="adm">
		<hr noshade="noshade">
		<a href="javascript:document.forms[0].submit();">Ok</a>
	</form>
	<p></p>
</div>
<?php }?>