<?php
chdir(__DIR__);
include "../Interfaces/InterfaceCrud.php";

class Sessao implements InterfaceCrud {
    private $idUsuario;
    private $dispositivo;
    private $localizacao;
    private $ultimaAtualizacao;
    private $id;

    public function login() {
        echo "Logou";
    }

    public function destruir() {
        echo "Sessão destruída";
    }

    public function logout() {
        echo "Logout efetuado";
    }

    public function atualizar() {
        echo "Atualizado com sucesso";
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

    function listar(int $id = null):bool {
        echo "Listado";
    }
}