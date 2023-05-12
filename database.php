<?php
// connect to a database
class DataBase
{
    public function query($query)
    {
        $dsn = "mysql:host=127.0.0.1;port=3306;dbname=myapp;user=root";
        $pdo = new PDO($dsn);
        $statement = $pdo->prepare("$query");
        $statement->execute();
        return $statement;
    }
}