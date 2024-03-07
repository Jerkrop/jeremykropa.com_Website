<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
 require  header('location:index.html'); 
  
   
}

?>

