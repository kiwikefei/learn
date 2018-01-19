<?php

/*
    0. Quick recap (Create database and table todos)
       make some dummy data.
    1. PDO connection
    2. Todo class
    3. Fetch Data to Object(Todo)
    4. Show List (index.view.php)
    5. Show Detail (show.view.php)
    6. Insert(insert.view.php)
    7. Edit(edit.php)
    8. Delete
    9. Search
*/

// 0. Setup database and table
/*

mysql -uroot                // connect to local database
> show databases;           // list all the available databases
> drop database todos;      // delete an existing database
> create database learn;    // create a new database
> use learn;
> create table todos(id integer primary key auto_increment, title varchar(100) not null, description text, completed tinyint not null default 0);
> show tables;
> select * from todos;
> insert into todos(title, description, completed) values('learnphp', 'I should finish up my php homework by the end of today', 0);
> insert into todos(title, description, completed) values('learncss', 'try to write my own css layout file', 0);
> insert into todos(title, description, completed) values('setupcoding enviroments', 'run apache, run mysql,open chrome broswer', 1);
> insert into todos(title, description, completed) values('learnhtml', 'build my first static html homepage', 0);
> update todos set completed = true where id = 2;
> select * from todos where completed = true;

*/

// 1. Connect to database
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=learn', 'homestead', 'secret');
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}
$statement = $pdo->prepare('select * from todos');
$statement->execute();

// 2. fetch data to Todo class (stander fetch)
    // $todos = $statement->fetchAll();
    // return array of array
    // var_dump($todos):
// 3. Fetch Data to Object(Todo)
    // 3.1 define class Todo
    class Todo
    {
        public $id;
        public $title;
        public $description;
        public $completed;
    }
    // 3.2 fetch data and hydrate it to class Todo
    $todos = $statement->fetchAll(PDO::FETCH_CLASS, 'Todo');
    // var_dump($todos);
// 4. Show List (index.view.php)
    include 'test8.index.view.php';
    //5 . refactor to a mvc level
// database/Connection
// database/QueryBuilder
// index.php
// config.php
// Router
