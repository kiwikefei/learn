<?php
require 'models/Todo.php';
$todos = $query->selectAll('todos' );
//var_dump($todos);
//$todos = array_map(function($todo){
//    $t =  new Todo;
//    $t->id = $todo->id;
//}, $todos);
require 'views/index.view.php';