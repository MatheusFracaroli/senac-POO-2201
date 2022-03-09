<?php
chdir(__DIR__);
include_once "../Interfaces/InterfaceCrud.php";
include_once "../Interfaces/Usuario.interface.php";

class Usuario implements InterfaceCrud, IUsuario {
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

    public function acao(array $idProduto):bool {
        echo "Fez a ação";
    }
}