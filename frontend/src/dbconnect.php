<?php
    try {
        $dsn = "mysql:host=mysql;dbname=".$_ENV["MYSQL_DATABASE"].";charset=utf8";
        $db = new PDO($dsn, $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASSWORD"]);
    } catch(PDOException $e) {
        echo ('DB接続エラー: '.$e->getMessage());
    }