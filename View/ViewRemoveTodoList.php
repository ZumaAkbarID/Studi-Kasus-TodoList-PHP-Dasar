<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BussinesLogic/removeTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';

function viewRemoveTodoList()
{
    echo 'Hapus Todo' . PHP_EOL;

    $pilihan = input('Nomor (x untuk batal)');

    if ($pilihan == 'x') {
        echo 'Batal Menghapus' . PHP_EOL;
    } else {
        $hapus = removeTodoList((int)$pilihan);

        if ($hapus) {
            echo "Berhasil menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}