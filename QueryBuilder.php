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
            // TODO: INSERT INTO {$table} values {$values}
            // TODO: prepare($insert)
            // TODO: $param,$bind,$stm with bindParam
            // TODO: execute
        }catch (PDOException $exception){
            die($exception->getMessage());
        }
    }

    public function selectAll($select, $table, $where){
        // TODO: SELECT {$select} FROM {$table} WHERE {$where}
        // TODO: execute

        // TODO: return the correct fetch method, fetchAll with PDO::FETCH_ASSOC or PDO::FETCH_OBJ or PDO::FETCH_CLASS
    }

    public function updateAll($table, $column, $value, $id)
    {
        // TODO: UPDATE {$table} SET {$column}={$value} WHERE id={$id}
        // TODO: prepare
        // TODO: execute
    }

    public function deleteAll($table, $id)
    {
        // TODO: DELETE FROM {$table} WHERE id={$id}
        // TODO: prepare
        // TODO: execute
    }
}?>
