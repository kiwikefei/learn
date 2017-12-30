<?php
//$task = [
//    'title' => 'Learn PHP',
//    'due'   => 'today',
//    'assign_to' => 'Andy',
//    'completed' => false
//];
require 'Task.php';
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}
$statement = $pdo->prepare('select * from my_todos');
$statement->execute();
//$results = $statement->fetchAll(PDO::FETCH_OBJ);
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'lesson4.view-o.php';
