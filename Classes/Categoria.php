<?php
include "InterfaceCrud.php";

class Categoria implements InterfaceCrud {
    private $id;
    private $nome;

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

    function avisoLimiteMin() {
        echo "Limite mínimo";
    }
}