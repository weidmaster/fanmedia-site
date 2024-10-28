<link rel="stylesheet" href="news.css" type="text/css">
<?php
//Cuida do BD
include_once("config.php");
//Seleciona dados da tabela de novidades
$sql=mysqli_query($conexao, "SELECT * FROM $tb2 ORDER BY id");
//Quantas novidades?
$numnews=mysqli_num_rows($sql);
//Se tiver news
if ($numnews <> 0) {
	//Carrega os dados
	while ($reg=mysqli_fetch_array($sql)) {
		//Seta as variáveis da tabela
		$titulo = $reg['titulo'];
		$data = $reg['data'];
		$autor = $reg['autor'];
		$new = $reg['new'];
		//arrumando a data
		$data=explode(" ",$data);
		$dia=$data[0];
		$hora=$data[1];
		//retira os segundos da hora
		$hora=explode(":",$hora);
		$horaok="$hora[0]:$hora[1]";
		$dia=explode("-",$dia);
		$data="$dia[2]/$dia[1]/$dia[0] às $horaok";
		//verifica avatar
		$sql2 = mysqli_query($conexao, "SELECT * FROM $tb1 WHERE nome = '$autor'");
		$reg2 = mysqli_fetch_array($sql2);
		$userimg = $reg2['nick'];
		$avimg = strtolower($userimg);
		$avimg = 'imagens/avatar/'.$avimg.'.gif';
	//Exibe-se as novidades
	?>
	<div id="news">
		<?php
		//Existe avatar?
		if (file_exists($avimg)) {?>
		<img class="avatar" src="<?php echo "$avimg";?>" width="110" height="110" border="0" alt="">
		<?php } else {?>		
		<img class="avatar" src="imagens/avatar/admin.gif" width="110" height="110" border="0" alt="">
		<?php } ?>
		<h2><?php echo "$titulo"?></h2>
		<h3>postado em <?php echo "$data"?></h3>
		<h4>por: <?php echo "$autor"?></h4>
		<p><?php echo "$new"?></p>
	</div>

<?php
}
	//Se nenhuma novida for encontrada
	} else {
		//mostra sem novidades
	?>
	<div id="quadro">
	<div id="news">
		<img class="avatar" src="imagens/avatar/admin.gif" width="110" height="110" border="0" alt="">		
		<h2>Nenhuma novidade</h2>
		<h3>-</h3>
		<h4>por: Admin</h4>
		<p>Nenhuma novidade encontrada no banco de dados.</p>
	</div>
</div>
<?php } ?>