<?php

#inclui_noticia.php

include_once('db.class.php');

//Recebe dados do formulario
$titulo = $_POST["titulo"];
$link = $_POST["link"];
$descricao = $_POST["descricao"];

//obtem data de publicacao
date_default_timezone_set('UTC');
$data_publ = date("Y").'-'.date("m").'-'.date("d");

//instancia um objeto da classe BD
$obj = new DB('mysql', 'root', 'password', 'topico_xml');
$obj->DBError();
$campos = "(' ', '$titulo', '$link', '$descricao', '$data_publ')";
$obj->insertTab('noticia',$campos);

if ($obj->resultado == 1)
{
	echo "Inclusão OK <br><br> <a href=\"form_noticia.html\">Voltar</a>";
}
else
{
	echo "Erro na Inclusão";
}
?>
