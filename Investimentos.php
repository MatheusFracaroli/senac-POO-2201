<?php

class Investimentos implements Crud {
   private $id = 0;
   private $quantidade = 0;
   private $id_ativo = 0;

   private function editarInvestimento(string $id, int $quantidade) {

   }

   private function cancelarInvestimento(int $id) {

   }

   public function criar(int $id):bool {
        return true;
    }

    public function apagar(int $id):bool {
        return true;
    }

    public function editar(int $id, array $dados):bool {
        return true;
    }

    public function listar(int $id = null):array {
        return [];
    }
}