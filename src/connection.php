<?php 

try
{
    $host = 'mysql-server';
    $db = 'Blog';
    $user = 'root';
    $password = 'secret'; 

    $dsn = new PDO("mysql:host=mysql-server;dbname=Blog;charset=UTF8", $user, $password);
}

catch(PDOException $e){
    echo $e->getMessage();
    }
?>