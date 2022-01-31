<?php

require_once __DIR__ . '/../View/ViewShowTodoList.php';
require_once __DIR__ . '/../BussinesLogic/AddTodoList.php';

addTodoList('Mama');
addTodoList('Ayah');
addTodoList('Galau');
addTodoList('Apasi');
addTodoList('lahloh');

viewShowTodoList();