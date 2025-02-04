<?php

class Login
{
    private $email;
    private $senha;
    private $nome;
    
    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $emailFiltrado = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $emailFiltrado;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function Logar()
    {
        if ($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos";
        endif;
    }
}

$logar = new Login("teste@teste.com", "123456", "Hiago Henrique Tofanelli");

$logar->Logar();
echo "<br>";
echo $logar->getNome();