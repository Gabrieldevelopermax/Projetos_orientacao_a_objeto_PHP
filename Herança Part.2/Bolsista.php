<?php

	require_once"Aluno.php";

	class Bolsista extends aluno{

		private $bolsa;

		public function getBolsa(){
			return $this->bolsa;
	}
		public function setBolsa($bolsa){
			$this->bolsa=$bolsa;

	}
		public function renovarBolsa(){

			echo"Bolsa renovada";
		}
		public function pagarMensalidade(){
			echo"<p>$this->nome é bolsista! Então paga com desconto!";

		}



	}


  ?>