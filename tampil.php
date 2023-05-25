<?php

require './connect_mysql.php';
$id_login = $_SESSION['id'];
// WHERE 'id_login=$id_login'

$sql = "SELECT `id`, 'id_login', `task`, `status` FROM `tb_todolist` WHERE id_login=$id_login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<ul class="list-group list-group-horizontal rounded-0 bg-transparent">';
        echo '  <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">';
        echo '    <div class="form-check">';
        $checked = $row["status"] == 0 ? 'checked' : ''; // menentukan nilai 'checked' berdasarkan status
        if ($row["status"] == 1) {
            echo '      <a href="update.php?id=' . $row["id"] . '"><input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1" aria-label="..." ' . $checked . ' /></a>';
        } else {
            echo '      <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1" aria-label="..." ' . $checked . ' />';
        }
        echo '    </div>';
        echo '  </li>';

        echo '  <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">';
        echo '    <p class="lead fw-normal mb-0">' . $row["task"] . '</p>';
        echo '  </li>';

        echo '  <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">';
        echo '    <div class="d-flex flex-row justify-content-end mb-1">';
        // echo '      <a href="update.php?id=' . $row["id"] . '" class="text-info me-3" data-mdb-toggle="tooltip" title="Edit todo"><i class="fas fa-pencil-alt"></i></a>';
        echo '      <a href="delete.php?id=' . $row["id"] . '" data-mdb-toggle="tooltip" title="Delete todo"><i class="fas fa-trash-alt"></i></a>';
        echo '    </div>';
        echo '  </li>';
        echo '</ul>';

    }
} else {

}
$conn->close();
?>