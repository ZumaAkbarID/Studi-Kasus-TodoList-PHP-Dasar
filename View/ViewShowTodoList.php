<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BussinesLogic/ShowTodoList.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo PHP_EOL;

        echo '***OPSI***' . PHP_EOL;
        echo '[1] Tambah Todo' . PHP_EOL;
        echo '[2] Hapus Todo' . PHP_EOL;
        echo '[q] Keluar' . PHP_EOL;

        $pilihan = input('Pilihan');

        if ($pilihan == '1') {
            viewAddTodoList();
        } else if ($pilihan == '2') {
            viewRemoveTodoList();
        } else if ($pilihan == 'q') {
            break;
        } else {
            echo 'Pilihan tidak dimengerti' . PHP_EOL;
        }
    }

    echo 'Sampai Jumpa!' . PHP_EOL;
}