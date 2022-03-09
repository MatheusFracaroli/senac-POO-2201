<?php
class Usuario implements InterfaceCrud {
    private $email;
    private $nome;
    private $id;
    private $senha;
    private $id_perfil;

    function cadastrar() {
        echo "Cadastrado";
    }

    function atualizar() {
        echo "Atualizado";
    }

    function deletar() {
        echo "Deletado";
    }

    function getUsuario() {
        echo "Nome de usuario x";
    }
}