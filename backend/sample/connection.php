<?php
require_once('config.php');

function connectPdo()
{
    try {
        return new PDO(DSN, DB_USER, DB_PASSWORD);
    } catch(PDOException $e) {
        echo ('DB接続エラー: '.$e->getMessage());
        exit();
    }
}

/**
 * This function is retrieve All records
 * @return array
 */
function getAllRecords()
{
    $dbh = connectPdo();
    $sql = 'SELECT * FROM todos WHERE deleted_at IS NULL';
    return $dbh->query($sql)->fetchAll();
}


/**
 * This function is insert data
 * @param string $todoText
 * @return null
 */
function createTodoData($todoText)
{
    $dbh = connectPdo();
    $sql = 'INSERT INTO todos (content) VALUES ("' . $todoText . '")';
    $dbh->query($sql);
}
