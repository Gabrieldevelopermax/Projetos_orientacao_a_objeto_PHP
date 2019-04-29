<?php


class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;
    
    public function marcarLuta($l1,$l2){
        if($l1->getCategoria() === $l2->getCategoria()&&($l1!=$l2)){
            $this->aprovada=true;
            $this->desafiado=$l1;                                               
            $this->desafiante=$l2;
            
        }else{
            $this->aprovada=FALSE;
            $this->desafiado=null;
            $this->desafiante=null;         
            
            }    
        
    }
    public function lutar  (){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor=rand(0,2); 
            switch($vencedor){
                case 0://empate
                    echo"<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                   break;
              
                case 1://Desafiado Venceu
                   echo"<p>".$this->desafiado->getNome()." Venceu ";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                       
                case 2://Desafiante Venceu
                echo"<p>".$this->desafiante->getNome()." Venceu ";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
               }
        }else
            echo"<p>Luta não pode acontecer</p>";
                 
    }
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovado() {
        return $this->aprovado;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rouns) {
        $this->rouns = $rouns;
    }

    function setAprovado($aprovado) {
        $this->aprovado = $aprovado;
    }


}
