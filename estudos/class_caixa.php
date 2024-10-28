<?php
class Caixa{
	private $altura;
	private $espessura;
	private $largura;
	private $conteudo;
	private $cor;
	
	function __construct($altura=1,$espessura=1,$largura=1,$cor="preto"){
		
		$this->altura=$altura;
		$this->espessura=$espessura;
		$this->largura=$largura;
		$this->cor=$cor;
		$this->conteudo="";
	}
	
	public function introduz($coisa){
	
		$this->conteudo=$coisa;
		
	}
	
	public function mostra_conteudo(){
	
		echo $this->conteudo;
		
	}
}
?>