<!DOCTYPE HTML>
<html>
<body>
<?php 
 include_once("DBConnection.php"); 
 session_start(); //start a session 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
 if (empty($_POST['email']) || empty($_POST['password'])) //Validating inputs
 { 
 echo 
 "Incorrect email or password"; 
 header("location: LoginForm.php");
 } 
 
 $inEmail = $_POST["email"]; 
 $inPassword = $_POST["password"]; 
 $stmt= $db->prepare("SELECT EMAIL, PASSWORD FROM PROFILE WHERE EMAIL = ?"); //Fetching all the records with input credentials
 $stmt->bind_param("s", $inEmail); //bind_param() - Binds variables to a prepared statement as parameters.
 $stmt->execute();
 $stmt->bind_result($EmailDB, $PasswordDB); // Binding i.e. mapping database results to new variables
   
 //Compare if the database has username and password entered by the user. Password has to be decrypted while comparing.
 if ($stmt->fetch() && password_verify($inPassword, $PasswordDB)) 
 {
 $_SESSION['email']=$inEmail; //Storing the username value in session variable
 header("location: UserProfile.php"); // user will be taken to profile page
 }
 else
 {
    echo "Incorrect email or password"; 
   ?>
 
   <a href="LoginForm.php">Login</a>
       <?php 
 } 
 } 
       ?>
 </body> 
 </html>