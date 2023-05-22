<?php
require './connect_mysql.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "UPDATE `tb_todolist` SET task='Sudah terupdate' WHERE id='$id'";
    header('location:toDoList.php');
    if ($conn->query($sql) === TRUE) {
        // echo "Record updated successfully";
    } else {
        // echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>