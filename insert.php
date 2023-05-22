<?php
require './connect_mysql.php';

$list = $_POST['list'];
$sql = "INSERT INTO tb_todolist(task, status) VALUES ('$list', 1)";
header('location:toDoList.php');
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>