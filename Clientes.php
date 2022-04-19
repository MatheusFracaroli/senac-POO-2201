<?php

class Clientes implements Crud {
    private $id = 0;
    private $nome = '';
    private $telefone = '';
    private $listaDeClientes = [];

    private function editarNome(string $nome) {

    }

    private function editarTelefone(string $telefone) {

    }

    public function criar(int $id):bool {
        return true;
    }

    public function apagar(int $id):bool {
        return true;
    }

    public function editar(int $id, array $dados):bool {
        return true;
    }

    public function listar(int $id = null):array {
        return [];
    }
}