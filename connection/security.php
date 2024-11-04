<?php 
session_start();

if (!isset($_SESSION['id'])) {
    header('Location:/akad_averroes/pages/auth/sign_in.php');
}

?>