<?php


namespace App\Entities;


use App\DataBase\Connection;
use PDO;

class Entity implements IBuild
{
    protected string $table;

    public function __construct()
    {
        $this->table = '';
    }

    public function getByField(array $values)
    {
        $connection = Connection::getInstance();

        $sql = "SELECT * FROM ".$this->table." WHERE ";
        foreach ($values as $key  => $value){
            $sql .= $key."='{$value}' AND ";
        }
        $sql = rtrim($sql, " AND ");
        $query = $connection->prepare($sql);
        var_dump($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}