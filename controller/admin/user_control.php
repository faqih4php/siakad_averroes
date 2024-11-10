<?php 
include '../../connection/connection.php';

function get_all_user() {
    global $conn;

    $sql = "SELECT user.id, user.nama as nama_user, role.nama as role, user.username FROM user JOIN role ON user.role_id = role.id";
    $result = $conn->query($sql);

    return $result;
}

if (isset($_GET['action'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];

    if ($action == 'edit') {
        $sql = "SELECT user.id, user.nama as nama_user, role.nama as role, user.username FROM user JOIN role ON user.role_id = role.id WHERE user.id = $id"; 
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
        header('location:../../pages/admin/user/edit.php?id='.$data['id'].'&nama='.$data['nama_user'].'&role='.$data['role'].'&username='.$data['username']);
    }elseif ($action == 'edit') {
        
    }
}


?>