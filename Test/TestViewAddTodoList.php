<?php

require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../BussinesLogic/ShowTodoList.php';

addTodoList('Mama');
addTodoList('Ayah');
addTodoList('Galau');
addTodoList('Apasi');
addTodoList('lahloh');

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();