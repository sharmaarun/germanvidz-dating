<?php


class MYSQLConnection extends PDO
{
    private const serverName = 'localhost';
    private const database = 'rushi_project';
    private const username = 'root';
    private const password = 'P@55word';
    private const connectionString = 'mysql:host=' . self::serverName . ";dbname=" . self::database;

    private ?PDO $connection = null;

    public function __construct()
    {
        parent::__construct(self::connectionString,self::username,self::password);
        $this->connection = new PDO(self::connectionString, self::username, self::password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (!isset($this->connection)) {
            echo "connection is not done";
            throw new PDOException("Connection not established");
        }
    }
}