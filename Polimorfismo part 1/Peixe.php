<?php 
require"Animal.php";

class peixe extends Animal{

	public function Alimentar(){
		echo "<p>Comendo Substancias</p>";
	}
	public function EmitirSom(){
		echo "<pPeixe Não faz som></p>";
	}
	public function Locomover(){
		echo "<p>Nadando</p>";
	}
	function soltarBolha(){
		echo"Soltou uma Bolha";
	}
	public function getCorEscama(){
		return $this->corEscama;
	}
	public function setCorEscama($corEscama){
		$this->corEscama=$corEscama;

	}



}




 ?>