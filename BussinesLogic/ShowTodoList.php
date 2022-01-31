<?php

function showTodoList()
{
    global $todoList;

    echo "PHP Todo List" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}