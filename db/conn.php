<?php
  
  // remote database connection
  $host = 'remotemysql.com';
  $db = 'rrSJlJvjEz';
  $user = 'rrSJlJvjEz';
  $pass = 'ysmoBbjgVi';
  $charset = 'utf8mb4';

        //local dev connection
    // $host = 'localhost';
    // $db = 'attendance_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        throw new PDOException($e->getMessage());
        //echo "<h1 class='text-danger'> No Database Found </h1>";
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>