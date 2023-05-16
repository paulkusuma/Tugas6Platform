<?php
require './connect_mysql.php';

$sql = "SELECT `id`, `task`, `status` FROM `tb_todolist`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Tugas: " . $row["task"] . " " . $row["status"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>