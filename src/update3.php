<?php session_start(); ?>
<?php require 'db.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('update nekocafe set name=?,place=?,website=?,category=? where id=?');
    $sql->execute([
        $_SESSION['cafe']['name'],$_SESSION['cafe']['place'],$_SESSION['cafe']['website'],$_SESSION['cafe']['category'],$_SESSION['cd']['update']
    ]);

    header('Location:nekoCafe.php');
?>