<?php 
include '../../connection/connection.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];

$sql = "INSERT INTO user VALUES (null, '$nama', '$username', '$pass', 3)";
session_start();

if ($conn->query($sql) == true) {
    $_SESSION['msg'] = 'Data Add Succesfully';
    header('Location:../../pages/admin/user/index.php');
}else {
    $_SESSION['msg_err'] = 'Data Add Succesfully';
    header('Location:../../pages/admin/user/index.php');
}


?>