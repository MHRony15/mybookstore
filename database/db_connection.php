<?php
function Connect(){
    $db_name = "mysql:host=sql6.freesqldatabase.com;dbname=sql6465238;";
    $user = 'sql6465238';
    $pass = 'cqBzFiLBFw';
    try{
        $pdo = new PDO($db_name,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
     catch(PDOException $e) {
            return -1;
    }
}

?>