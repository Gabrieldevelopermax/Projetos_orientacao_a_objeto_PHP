<?php
require_once"Animal.php";
	class Ave {

	private$corPena;

	public function fazerNinho(){

		echo"<p>Contruir um Ninho</p>";
	}
	public function Locomover(){
		echo"<p>Voando</p>";
	}
	public function Alimentar(){
		echo"<p>Comendo Frutas</p>";
	}
	public function EmitirSom(){
		echo"<p>Som de Ave</p>";
	}
	public function getCorPena(){
		return $this->corEscama;
	}
	public function setCorPena($corPena){
		$this->corPena=$corPena;

	}


}



  ?>