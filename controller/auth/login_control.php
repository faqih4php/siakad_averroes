<?php 
include '../../connection/connection.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    $data = $result->fetch_assoc();
     if (password_verify($password, $data['password'])) {
        
        $_SESSION['id'] = $data['id'];
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role_id'];

        if ($data['role_id'] == 1) {
            echo "<script>alert('Login Succes, Anda Sebagai Admin')</script>";
            header('location:../../pages/admin/index.php');
        }elseif ($data['role_id'] == 2){
            echo "<script>alert('Login Succes, Anda Sebagai Guru')</script>";
            header('location:../../pages/guru/index.php');
        }elseif ($data['role_id'] == 3){
            echo "<script>alert('Login Succes, Anda Sebagai Murid')</script>";
            header('location:../../pages/user/index.php');
        }
     }
}else{

    $_SESSION['massage'] = "Username or Password is wrong";
    return header('location: ../../pages/auth/sign_in.php');
}


?>