<html>
<head>
<title>Horizonte - Traduções</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
	<link rel="stylesheet" href="layout.css" type="text/css">
</head>
<body>
	<div id="tudo">
		<div id="topo">
		<h1>Horizonte</h1>
		<div id="barra"><img src="imagens/barra.png" width="526" height="27" border="0"></div>
		<h2>Traduções</h2>
		</div>
		
		<div id="menu">
			
			<ul>
				<h3>Projetos</h3>
					<li><a href="?p=projeto&id=1">Fate/stay night</a></li>
				
				<h3>Telas</h3>
					<li><a href="?p=tela&id=1">Fate/stay night</a></li>
					
				<h3>Contato</h3>
					<li><a href="?p=equipe">Equipe</a></li>
					
			</ul>
			
		</div>
		
		<div id="meio">
			<?php 
		if (isset($_GET["p"])) {
			$p=$_GET["p"];
			$pagina=$p.'.php';
			if (file_exists($pagina)){
			include($pagina);
			
			} else {
			include("404.html");
			}
		} else {
			include("princ.php");
		}
		clearstatcache();
		?>	
		</div>
		
		<h4>Horizonte (c) 2008 - Todos os direitos reservados</h4>
	</div>
</body>
</html>