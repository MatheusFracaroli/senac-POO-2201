<?php
include "InterfaceCrud.php";

class Sessao implements InterfaceCrud {
    private $idUsuario;
    private $dispositivo;
    private $localizacao;
    private $ultimaAtualizacao;

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