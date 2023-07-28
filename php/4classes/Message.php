<?php

class Message extends Crud
{
    public function __construct($table)
    {
        $this->table = $table;
    }

    function Select()
    {
        $sql = "select * from $this->table";
        $query = $this->pdo()->prepare($sql);
        return $query->execute() ? $query->fetchAll(PDO::FETCH_OBJ) : false;
    }

    function Create($array)
    {
        $sql = "insert into $this->table (user_id, message) value (?,?)";
        $query = $this->pdo()->prepare($sql);
        return $query->execute(array_values($array)) ? true : false;
    }

    function Edit($array, $id)
    {
        // TODO: Implement Edit() method.
    }

    function Delete($id)
    {
        // TODO: Implement Delete() method.
    }
}

$msg = new Message("messages");