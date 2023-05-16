<?php
require './connect_mysql.php';


$sql = "UPDATE `tb_todolist` SET task='Sudah terupdate' WHERE status='1'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>