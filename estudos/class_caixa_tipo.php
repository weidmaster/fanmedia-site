<?php
require("class_caixa.php");

class Caixa_tipo extends Caixa{

	private $tipo;
	
	function __construct($altura=1,$espessura=1,$largura=1,$cor="preto",$tipo="Sem classificação"){
	
		parent::__construct($altura,$espessura,$largura,$cor);
		$this->tipo=$tipo;
		
	}
	
	function define_tipo($novo_tipo){
	
		$this->tipo = $novo_tipo;
	}
	
	function mostra_conteudo(){
	
		echo "Conteúdo da caixa de <b>" .$this->tipo. "</b>: ";
		
		parent::mostra_conteudo();
		
	}
}
?>