<?php 
//session_start(); 
// print_r($_SESSION); exit;

$base_url = 'http://localhost/mlm/';

if(!isset($_SESSION['user_id'])){
    header('Location: '.$base_url.'login.php');
}


?>