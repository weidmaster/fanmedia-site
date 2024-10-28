<?php

#db.class.php

class DB
{
	public $conexao;
	public $resultado;
	
	function __construct($dominio, $usuario, $senha, $db)
	{
		$this->conexao = mysqli_connect($dominio, $usuario, $senha);
		mysqli_select_db($this->conexao, $db);
	}
	
	function DBError()
	{
		echo mysqli_error($this->conexao);
	}
	
	function insertTab ($tab, $campos)
	{
		$declar = "insert into $tab values $campos";
		$this->resultado = mysqli_query($this->conexao, $declar);
	}
	
	function selectTab ($tab, $campos, $condicao)
	{
		$declar = "select $campos from $tab $condicao";
		$this->resultado = mysqli_query($this->conexao, $declar);
	}
	
	function deleteTab ($tab, $condicao)
	{
		$declar = "delete from $tab $condicao";
		$this->resultado = mysqli_query($this->conexao, $declar);
	}
	
	function updateTab ($tab, $campos, $condicao)
	{
		$declar = "update $tab set $campos where $condicao";
		$this->resultado = mysqli_query($this->conexao, $declar);
	}
}
?>