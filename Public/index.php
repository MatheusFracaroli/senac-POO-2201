<?php
require_once '../Models/Cliente.class.php';

class Main {

    private Cliente $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente;

        $this->listarClientes();
    }

    public function listarClientes() {

        $clientes = $this->cliente->listar();

        foreach($clientes as $ind => $cliente) {
            $carteira = $this->cliente->carteira($clientes['id']);

            $totalAtivos = 0;

            foreach ($carteira as $cadaAtivo) {
            $totalAtivos += $cadaAtivo['qtd'];
            }

            $clientes[$ind]['totalAtivos'] = $totalAtivos;
        }

        require_once '../Views/cliente.listar.php';
    }
}

new Main;