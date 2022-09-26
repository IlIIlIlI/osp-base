<?php
namespace HecknerFa\Cloud;

class DatabaseHandler
{
    public $connection = null;

    public function __construct($servername, $dbName, $username, $password)
    {
        $options = [
            \PDO::ATTR_EMULATE_PREPARES => false,
            \PDO::ATTR_STRINGIFY_FETCHES => false,
        ];
        $this->connection = new \PDO("mysql:host=".$servername.";dbname=".$dbName, $username, $password, $options);
    }

    // Execute a set Query //
    public function executeQuery($statement, $data = null)
    {
        return $this->connection
            ->prepare($statement)
            ->execute($data)
            ->fetchAll(\PDO::FETCH_ASSOC);
    }
}