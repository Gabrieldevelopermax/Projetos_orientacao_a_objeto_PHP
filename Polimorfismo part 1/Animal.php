<?php  

	abstract Class Animal{

	protected $peso;
	protected $idade;
	protected $membros;

	abstract function Locomover(){

	}
	abstract function  Alimentar(){

	}
	abstract function  EmitirSom(){

	}
	public function getPeso(){
		return $this->peso;
	}
	public function setPeso($Peso){
		$this->peso=$peso;

	}
	public function getIdade(){
		return $this->idade;
	}
	public function setIdade($Idade){
		$this->idade=$idade;

	}
	public function getMembros(){
		return $this->membros;
	}
	public function setMembros($membros){
		$this->membros=$membros;

	}


}


?>