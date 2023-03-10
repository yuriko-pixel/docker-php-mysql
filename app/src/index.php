<?php
    // 接続
    $dsn = 'mysql:dbname=test_db;host=run-php-db;';
    $user = 'test';
    $password = 'test';

    try {
        $pdo = new PDO($dsn, $user, $password);
        $sth = $pdo->query("SELECT * FROM users where id = 1");
        $user = $pdo->fetch(PDO::FETCH_ASSOC);
        var_dump($user);
    } catch(PDOException $e) {
        print("Error:".$e->getMessage());
        exit;
    }