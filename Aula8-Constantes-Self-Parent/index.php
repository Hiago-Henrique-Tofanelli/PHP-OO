<?php 

class Pessoa {
    const nome = "Hiago";

    public function exibirNome(){
        echo self::nome;
    }
}

class Hiago extends Pessoa {
    const nome = "Tofanelli";

    public function exibirNome(){
        echo parent::nome;
    }
}

$hiago = new Hiago();
$hiago->exibirNome();