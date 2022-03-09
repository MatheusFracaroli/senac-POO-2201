<?php
include "InterfaceCrud.php";

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

    function criar() {
        echo "Criado";
    }

    function apagar() {
        echo "Apagado";
    }

    function editar() {
        echo "Editado";
    }

    function listar() {
        echo "Listado";
    }
}