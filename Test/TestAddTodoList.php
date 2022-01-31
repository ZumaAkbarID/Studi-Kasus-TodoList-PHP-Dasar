<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BussinesLogic/AddTodoList.php';

addTodoList('Rahmat');
addTodoList('Wahyuma');

var_dump($todoList);