<?php

interface User {
    public function seLogar();
    public function apagar();
}

class Usuario {
    private $nome = 'Cleiton';
    private $email;
    private $nasc;

    public function seLogar() {
        echo "Logado \n";
    }

    public function seDeslogar() {
        echo "Tchau \n";
    }

    public function setNome($val) {
        $this->nome = $val;
    }

    public function getNome() {
        $this->nome = $nome;
    }

}

//$cleiton = new Usuario;

Usuario::seLogar();

// $cleiton->seLogar();

// $cleiton->setNome("Cleitinho");

// var_dump($cleiton);

// echo 'O meu nome é ' . $cleiton->nome;

class Professor implements User {
    public function mudaNome() {
        $this->nome = 'Bono';
    }

    public function seLogar() {

    }

    public function apagar() {

    }
}

// $cleiton = new Professor;
// $cleiton->mudaNome();
// echo 'Meu nome é ' . $cleiton->getNome();