<?php 

if(empty($_GET['post'])){
    header('Location: ../index.php?r=insertError');
    exit();
}

$title = $_GET['title'];
$text = $_GET['post'];
$userid =$_GET ['user'];





define('_DEFVAR', 1);

include('conn.php');

$sql = "INSERT INTO posts (title, description, `datetime` ) VALUES ( '$title', '$text', Now() )";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=blog&r=insertOk');
} else {
    header('Location: ../index.php?p=blogr=insertError');
}

$conn->close();
?>