<?php 
include '../../connection/connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['role'];

$sql = "UPDATE user SET nama = '$nama', username = '$username', password = '$pass', role = '$role' WHERE id = $id";
session_start();

if ($conn->query($sql) == true) {
    $_SESSION['msg'] = 'Data Update Succesfully';
    header('Location:../../pages/admin/user/index.php');
}else {
    $_SESSION['msg_err'] = 'Data Update Succesfully';
    header('Location:../../pages/admin/user/index.php');
}

?>