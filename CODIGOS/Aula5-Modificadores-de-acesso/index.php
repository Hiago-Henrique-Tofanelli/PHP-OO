<?php 


class Veiculo {
    private $modelo;
    public $cor;
    public $ano;
    public function Andar(){
        echo "Andou";
    }
    public function Parar(){
        echo "Parou";
    }
}
class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpando em 3,2,1";
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(){
        return $this->modelo;
    }
}

class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando Grau em 3,2,1";
    }
}

$carro = new Carro();
$carro->setModelo("Gol");
echo $carro->getModelo();

echo '<pre>';
var_dump($carro);
echo '</pre>';