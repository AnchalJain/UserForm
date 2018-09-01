<?php 
 session_start();
 $email = $_SESSION['email']; 
 
 unset($_SESSION['email']); 
 session_destroy(); //destroy the session
 header("location: LoginForm.php"); 
 exit();
 
 if(!isset($_SESSION['email'])) 
 {
  header("location:LoginForm.php");
 }
?>