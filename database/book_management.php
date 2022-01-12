<?php
require_once './database/db_connection.php';

function Create($data){
    $id = $data['id'];
    $title = $data['title'];
    $author = $data['author'];
    $isbn = $data['isbn'];
    $abilable = $data['abilable'];
    
    $connection = Connect();
    $sql = "INSERT INTO book(id, title, author, isbn, abilable)";
    $query = $connection->prepare($sql);
    if($query->execute([':id' => $id, ':title' => $title, ':author' => $author, ':isbn' => $isbn, ':abilable' => $abilable] )){
        return 1;
    }
    else return -1;
}

function Get(){
    $connection = Connect();
    $sql = "SELECT * FROM book";
    $query = $connection->prepare($sql);
    $query->execute();
    $books = $query->fetchAll(PDO::FETCH_OBJ);

    return $books;
}

function Delete($id){
    $connection = Connect();
    $sql = "DELETE FROM book WHERE id=:id";
    $query = $connection->prepare($sql);

    if ($query->execute([':id' => $id])) {
        header("Location: /");
    }
}

?>