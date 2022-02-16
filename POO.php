<?php

class Usuario {
    private $nome = 'Cleiton';
    private $email;
    private $nasc;

    public function seLogar() {
        echo "Logado";
    }

    public function seDeslogar() {
        echo "Tchau";
    }

    public function setNome($val) {
        $this->nome = $val;
    }

}

$cleiton = new Usuario;

$cleiton->seLogar();

$cleiton->setNome("Cleitinho");

var_dump($cleiton);

echo 'O meu nome é ' . $cleiton->nome;