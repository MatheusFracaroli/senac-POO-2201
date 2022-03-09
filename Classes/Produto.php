<?php
class Produto implements InterfaceCrud {
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $idCategoria;

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