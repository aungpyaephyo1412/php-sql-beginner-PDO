<?php
//die(var_dump($_POST));
try {
    $pdo = new PDO("mysql:dbname=school;host=localhost","root","admin123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare("
    DELETE FROM students  WHERE id = :id
");
    $statement->bindParam(":id",$_GET['id']);
    if ($statement->execute()){
        header("location:index.php");
    }
}catch (Exception $exception){
    die(var_dump($exception->getMessage()));
}