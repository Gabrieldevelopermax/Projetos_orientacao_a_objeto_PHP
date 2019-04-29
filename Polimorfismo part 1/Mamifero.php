<?php
require_once"Animal.php";

class Mamifero extends Animal{

	private $corPelo;

	public function Locomover(){
		echo"<p>Correndo</p>";
	}
	public function Alimentar(){
		echo"<p>Mamando</p>";
	}
	public function EmitirSom(){
		echo"<p>Som de mamifero</p>";
	}
	public function getCorPelo(){
		return $this->corPelo;
	}
	public function setCorPelo($corPelo){
		$this->corPelo=$corPelo;

	}

	
}

  ?>