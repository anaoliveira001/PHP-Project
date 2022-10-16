<?php 

if(empty($_GET['post'])){
    header('Location: ../index.php?r=insertError');
    exit();
}
session_start();
$title = $_GET['title'];
$text = $_GET['post'];
$category = $_GET['category'];
$user_id = $_SESSION['id'];




define('_DEFVAR', 1);

include('conn.php');

$sql = "INSERT INTO posts (title, description, `datetime`, category_id, `user_id`) VALUES ('$title', '$text', Now(), $category, $user_id)";


if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=blog&r=insertOk');
} else {
    header('Location: ../index.php?r=insertError');
}

$conn->close();
?>