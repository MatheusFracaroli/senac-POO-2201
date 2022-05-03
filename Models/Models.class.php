<?php 

abstract class Model extends PDO {
    public function __construct()
    {
        if (is_file(__DIR__ . '/../config/db/php')) {
            die('Não há arquivo de configuração do DB');
        }

        parent::__construct(DSN, DB_USER, DB_PASS);
    }

    abstract function inserir(array $dados):?int;

    abstract function atualizar(int $id, array $dados):bool; 

    abstract function apagar(int $id):bool {
        $stmt = $this->prepare("DELETE FROM {$this->tabela} WHERE id = :id");

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        if($stmt->rowCount()> 0){
            return true;
        }else{
            return false;
        }

        return true;
    }

    abstract function listar(int $id = null):?array;
}