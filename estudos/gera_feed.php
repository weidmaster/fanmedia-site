<?php

#gera_feed.php

include_once('db.class.php');
include_once('arquivo.class.php');

//obtem data atual
$data_atual = date("Y").'-'.date("m").'-'.date("d");

//instancia um objeto da classe DB
$obj = new DB('localhost','root','','topico_xml');
$obj->DBError();
$condicao="where data_publ = '$data_atual'";
$obj->selectTab('noticia', '*', $condicao);

//Verifica se encontrou algum registro
$row = mysql_num_rows($obj->resultado);

if ($row > 0)
{
	//Determina o nome do arquivo XML que sera criado
	$arquivo = "feed.xml";
	
	//instancia um objeto da classe Arquivo
	//Abre arquivo
	$arquivo_xml = new Arquivo();
	$arquivo_xml->abreArq($arquivo,'w');
	
	$conteudo = "<?xml version='1.0' encoding='utf-8'?>";
	$conteudo .= "<rss version='2.0'>";
	$conteudo .= '<channel>';
	$conteudo .= '<title>Horizonte</title>';
	$conteudo .= '<link>www.horizonte.totalh.com</link>';
	$conteudo .= '<description>Fanmidia em geral</description>';
	$conteudo .= '<language>pt-br</language>';
	$conteudo .= '<copyright>Copyright - 2008 (c) Horizonte</copyright>';
	$conteudo .= '<webmaster>eduwb.horizonte@gmail.com</webmaster>';
	
	while ($result = mysql_fetch_assoc($obj->resultado))
	{
	
		//Monta as tags referentes as noticias
		$conteudo .= "\n<item>\n";
		$conteudo .= "<title>$result[titulo]</title>\n";
		$conteudo .= "<link>$result[link]</link>\n";
		$conteudo .= "<description>$result[descricao]</description>\n";
		$conteudo .= "</item>\n";
		
	}
	
	//Fecha as tags channel e rss
	$conteudo .= '</channel>';
	$conteudo .= '</rss>';
	
	$arquivo_xml->gravaArq($conteudo);
	$arquivo_xml->fechaArq();
	
	//Mensagem
	echo "O arquivo <b>".$Arquivo."</b> foi gerado com sucesso!";
}

?>
		