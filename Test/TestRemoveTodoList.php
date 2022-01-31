<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BussinesLogic/AddTodoList.php';
require_once __DIR__ . '/../BussinesLogic/ShowTodoList.php';
require_once __DIR__ . '/../BussinesLogic/removeTodoList.php';

addTodoList('Rahmat');
addTodoList('Wahyuma');
addTodoList('Akbar');
addTodoList('Mantapu');
addTodoList('Oreee');

removeTodoList(5);
showTodoList();