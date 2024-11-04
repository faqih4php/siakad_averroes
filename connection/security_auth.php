<?php 

session_start();
if(isset($_SESSION['id'])){
  if($_SESSION['role'] == 1){
    header('Location:../pages/admin/index.php');
  }elseif($_SESSION['role'] == 2){
    header('Location:../pages/guru/index.php');
  }elseif($_SESSION['role'] == 3){
    header('Location:../pages/user/index.php');
  }
}
?>