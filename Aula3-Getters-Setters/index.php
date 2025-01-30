<?php

class Login
{
    private $email;
    private $senha;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $emailFiltrado = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $emailFiltrado;
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
            echo "Logado com sucesso";
        else:
            echo "Dados inválidos";
        endif;
    }
}

$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<br>";

echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
