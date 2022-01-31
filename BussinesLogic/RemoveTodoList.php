<?php

function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > count($todoList)) {
        return false;
    }

    for ($i = $number; $i < count($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[count($todoList)]);

    return true;
}