interface builder
{
    
    public function createNew($table, $values,$param, $bind, $stm);

    public function selectAll($select,$table, $where);

    public function updateAll($table, $column, $value, $id);

    public function deleteAll($table, $id);
}
