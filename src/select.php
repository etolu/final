<?php session_start(); ?>
<?php require 'db.php'; ?>
<?php
$_SESSION['cd']['select'] = $_POST['category'];
if ($_POST['category']==1) {
    header('Location:nekoCafe.php');
}else{
    header('Location:category.php');
}
?>