<?php
class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table, $model = null)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        if($model){
            return $statement->fetchAll();
        }
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}