<?php
require"Animal.php";

class Reptil extends Animal{
	
	private $corEscama;
	
	public function Alimentar(){
		echo"<p>Comendo vegetais</p>";
	}
	public function EmitirSom(){
		echo"<p>Som de Reptil</p>";

	}
	public function Locomover(){
		echo"<p>Rastejando</p>";

	}
	public function getCorEscama(){
		return $this->corEscama;
	}
	public function setCorEscama($corEscama){
		$this->corEscama=$corEscama;

	}



}



  ?>