<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BussinesLogic/AddTodoList.php';
require_once __DIR__ . '/../BussinesLogic/ShowTodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';

addTodoList('Mama');
addTodoList('Ayah');
addTodoList('Galau');
addTodoList('Apasi');
addTodoList('lahloh');

showTodoList();

viewRemoveTodoList();

showTodoList();