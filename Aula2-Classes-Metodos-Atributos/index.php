<?php 

class Pessoa {

    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome." de ". $this->idade." acabou de falar";
    }
}

$hiago = new Pessoa();
echo '<pre>';
var_dump($hiago);
echo '</pre>';

$hiago->nome = "Hiago Henrique Tofanelli";
$hiago->idade = 22;
$hiago->Falar();

echo '<pre>';
var_dump($hiago);
echo '</pre>';