<?php session_start(); ?>
<?php require 'db.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into nekocafe (name,place,website,category) values(?,?,?,?)');
    $sql->execute([
        $_SESSION['cafe']['name'],$_SESSION['cafe']['place'],$_SESSION['cafe']['website'],$_SESSION['cafe']['category']
    ]);

    header('Location:nekoCafe.php');
?>