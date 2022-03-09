<?php
class Perfil implements InterfaceCrud {
    private $id;
    private $nome;
    private $descricao;
    private $permissoes;

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