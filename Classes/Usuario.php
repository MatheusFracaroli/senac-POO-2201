<?php
chdir(__DIR__);
include "../Interfaces/InterfaceCrud.php";

class Usuario implements InterfaceCrud {
    private $email;
    private $nome;
    private $id;
    private $senha;
    private $id_perfil;

    private function cadastrar() {
        echo "Cadastrado";
    }

    private function atualizar() {
        echo "Atualizado";
    }

    private function deletar() {
        echo "Deletado";
    }

    private function getUsuario() {
        echo "Nome de usuario x";
    }

    function criar(array $dados):bool {
        echo "Criado";
    }

    function apagar(int $id):bool {
        echo "Apagado";
    }

    function editar(int $id, array $dados):bool {
        echo "Editado";
    }

    function listar(int $id = null):array {
        echo "Listado";
    }
}