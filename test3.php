<?php
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
    $statement = $pdo->prepare('Select * from my_todos');
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    var_dump($results);
