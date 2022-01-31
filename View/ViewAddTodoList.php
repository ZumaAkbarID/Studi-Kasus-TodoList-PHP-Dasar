<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BussinesLogic/AddTodoList.php';
require_once __DIR__ . '/../View/ViewShowTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';

function viewAddTodoList()
{
    echo 'Tambah Todo' . PHP_EOL;

    $todo = input('Masukkan Todo (x untuk batal)');

    if ($todo == 'x') {
        echo 'Batal menambahkan' . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}