<?php

require "builder.php";
class QueryBuilder implements builder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createNew($table, $values,$param, $bind, $stm){
        try{
            $insert = "insert into {$table} values {$values}";
            $newItem = $this->pdo->prepare($insert);
            $newItem->bindParam($param,$bind,$stm);
            $newItem->execute();
        }catch (PDOException $exception){
            die($exception->getMessage());
        }
    }

    public function selectAll($select, $table, $where){
        // TODO: SELECT {$select} FROM {$table} WHERE {$where}
        $statement = $this->pdo->prepare("SELECT {$select} FROM {$table} WHERE {$where}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateAll($table, $column, $value, $id)
    {
        // TODO: UPDATE {$table} SET {$column}={$value} WHERE id={$id}
        $statement = $this->pdo->prepare("UPDATE {$table} SET {$column}={$value} WHERE id={$id}");

        $statement->execute();
    }

    public function deleteAll($table, $id)
    {
        // TODO: DELETE FROM {$table} WHERE id={$id}
        $statement = $this->pdo->prepare("DELETE FROM {$table} WHERE id={$id}");

        $statement->execute();
    }
}
