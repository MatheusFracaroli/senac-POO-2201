<?php
class Estoque implements InterfaceCrud {
    private $idProduto;
    private $quantidade;
    private $id;
    private $local;
    private $limiteMinimo;

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