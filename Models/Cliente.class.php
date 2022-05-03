<?php 
require __DIR__ . '/Model.class.php';

abstract class Cliente extends Model {
    public function __construct()
    {
        $this->tabela = 'clientes';
        parent::__construct();
    }

    function inserir(array $dados):?int {
        $stmt = $this->prepare("INSERT INTO {$this->tabela}
+                                        (id, nome, telefone) 
+                                        VALUES
+                                        (:id, :nome, :telefone)");


        $stmt->bindParam(':id', $dados['id']);
        +$stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':telefone', $dados['telefone']);

        if ($stmt->execute()) {
            return $this->lastInsertId();
        } else {
            return false;
        }
    }

    function atualizar(int $id, array $dados):bool {
        return true;
    }

    function listar(int $id = null):?array {
        if($id) {
            $stmt = $this->prepare('SELECT id, nome, telefone FROM clientes WHERE id = :id');

            $stmt ->bindParam('$id', $id);
        } else {
            $stmt = $this->prepare('SELECT id, nome, telefone FROM clientes from clientes');
        }

        $stmt->execute();

        $lista = [];

        while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
            $list[] = $registro;
        }

        return $lista;
    }
}