<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-loose.dtd">
<html>
<head>
	<title>Horizonte :: Administração</title>
	<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
	<link rel="stylesheet" href="../layout.css" type="text/css">
</head>
<body>

<div id="conteudo">
	<div id="topo"><h1>HORIZONTE FANSUB</h1></div>
	<div id="menu">
		<h2 class="fansub">Fansub</h2>
			<ul>
				<li><a href="?p=newsadm">Principal</a></li>
				<li><a href="?p=file">Arquivo de Novidades</a></li>
				<li><a href="?p=staff">Equipe</a></li>
				<li><a href="?p=partner">Parceria</a></li>
				<li><a href="?p=contact">Contato</a></li>
				<li><a href="?p=admin">Administrar</a></li>
				<li><a href="?p=faq">F.A.Q.</a></li>
				<li><a href="">Orkut</a></li>			
			</ul>
			<h2 class="ccg">CCG</h2>
			<ul>
				<li><a href="?p=packs">Packs</a></li>
				<li><a href="?p=forbidden">Cartas Proibidas</a></li>
				<li><a href="?p=rules">Livro de Regras</a></li>
				<li><a href="?p=promo">Promo</a></li>			
			</ul>	
		<h2 class="multimidia">Multimídia</h2>
			<ul>
				<li><a href="?p=episodes">Episódios</a></li>
				<li><a href="?p=amvs">AMVs</a></li>
				<li><a href="?p=fanarts">Fanarts</a></li>
				<li><a href="?p=fanfics">Fanfics</a></li>			
			</ul>	
			
		<h2 class="livre">Livre</h2>
			<ul>			
				<li><a href="?p=avatars">Avatares</a></li>
				<li><a href="?p=sigs">Sigs</a></li>
				<li><a href="?p=wallpapers">Wallpapers</a></li>
			</ul>
		<h2 class="status">Status</h2>
	</div>	
	<div id="pagina">
		<?php 
		if (isset($_GET["p"])) {
			$p=$_GET["p"];
			$pagina=$p.'.php';
			if (file_exists($pagina)){
			include_once($pagina);
			
			} else {
			include_once("../404.htm");
			}
		} else {
			include_once("apres.php");
		}
		clearstatcache();
		?>	
	</div>
	<div id="creditos">
		<adress>Horizonte &copy 2008 - Todos os direitos reservados<br>Programação: Eduardo WB | Layout: R. W. Baltruk</adress>	
	</div>
	<div id="footer"></div>
</div>	
</body>
</html>