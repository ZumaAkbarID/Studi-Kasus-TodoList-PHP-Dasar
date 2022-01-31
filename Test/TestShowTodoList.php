<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinesLogic/ShowTodoList.php";

$todoList[1] = 'Makan';
$todoList[2] = 'Minum';
$todoList[3] = 'Mandi';

showTodoList();