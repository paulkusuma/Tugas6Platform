<?php
require './connect_mysql.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT `task` FROM `tb_todolist` WHERE `id` = '$id'";
    $result = $conn->query($sql);
    header('location:toDoList.php');
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $task = $row['task'];
        $updatedTask = '<del>' . $task . '</del>';

        $updateSql = "UPDATE `tb_todolist` SET `task` = '$updatedTask' WHERE `id` = '$id'";
        if ($conn->query($updateSql) === TRUE) {
            // echo "Record updated successfully";
        } else {
            // echo "Error updating record: " . $conn->error;
        }
    }
}
$conn->close();
?>