<?php
// Todo lists (CRUD)
// 1. list all todos
// 2. show specific todo
// 3. add new todo
// 4. search todo by title
// 5. delete todo
// 6. update todo
// 7. mvc framework
// 8. styling bootstrap(css), javascript(frontend)

// todo , id, title, description, completed
// 1. prepare env.
// 2. connect to db
// dsn = data source name
require 'lesson8.function.php';
    class Todo
    {
        public $id;
        public $title;
        public $description;
        public $completed;
    }

    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=learn', 'homestead', 'secret', []);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    $sql = 'select * from todos';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    // $todos = $statement->fetchAll();
    $todos = $statement->fetchAll(PDO::FETCH_CLASS, 'Todo');
    require 'lesson8.index.php';
