<?php
require './connect_mysql.php';

// sql to delete a record
$sql = "DELETE FROM `tb_todolist` WHERE status='1'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>