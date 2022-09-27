<?php 

if(empty($_GET['post'])){
    header('Location: ../index.php?r=insertError');
    exit();
}

$title = $_GET['title'];
$text = $_GET['post'];
$user = $_GET['id'];



define('_DEFVAR', 1);

include('conn.php');

$sql = "INSERT INTO posts (title, description, `datetime`, 'user_id') VALUES ('$title', '$text', Now(), '$user')";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=blog&r=insertOk');
} else {
    header('Location: ../index.php?p=blogr=insertError');
}

$conn->close();
?>