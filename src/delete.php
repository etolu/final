<?php session_start(); ?>
<?php require 'db.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('delete from nekocafe where id=?');
    $sql->execute([$_SESSION['cd']['delete']]);
    // var_dump($_SESSION);
    header('Location: nekoCafe.php');
?>