<?php
require_once('connection.php');

function getTodoList()
{
    return getAllRecords();
}

function createData($post) {
    createTodoData($post['content']);
}
