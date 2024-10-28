<?php
	require("class_caixa.php");
?>
<html>
<head>
<title>Utilizando a classe Caixa</title>
</head>

<body>
<?php
	$minhacaixa=new Caixa();
	$minhacaixa->introduz("algo");
	$minhacaixa->mostra_conteudo();
?>
</body>
</html>