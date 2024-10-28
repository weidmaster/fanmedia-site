<?php
	require("class_caixa_tipo.php");
?>
<html>
<head>
<title>Usando a classe caixa tipo</title>
</head>

<body>
<?php

	$minhacaixa_tematica = new Caixa_tipo();
	$minhacaixa_tematica->define_tipo("Cabos e conectores");
	$minhacaixa_tematica->introduz("Cabo de rede");
	$minhacaixa_tematica->mostra_conteudo();
	echo "<br />";
	$minhacaixa_tematica->introduz("Conector RJ45");
	$minhacaixa_tematica->mostra_conteudo();
	
?>

</body>
</html>