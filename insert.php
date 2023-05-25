<?php
session_start();
require './connect_mysql.php';
if (isset($_POST['submitAdd'])) {
    $list = $_POST['list'];
}
$id_login = $_SESSION['id'];

$sql = "INSERT INTO tb_todolist(id_login, task, status) VALUES ('$id_login','$list', 1)";
header('location:toDoList.php');
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>