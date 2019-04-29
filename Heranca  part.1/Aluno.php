<?php 
require_once'Pessoa.php';
	
class Aluno extends Pessoa{
		
	private $mtr;
	private $curso;

	public function cancelarMat(){
			
		echo"<p>Matricula será cancelada</p>";
	}
	public function getMtr(){
		return $this->mtr;
	}
	public function setMtr($mtr){
		$this->mtr=$imtr;

	}
	public function getCurso(){
		return $this->curso;
	}
	public function setCurso($Curso){
		$this->Curso=$Curso;
	}
	
	} 


 ?>