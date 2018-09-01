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
 "Enter valid email or password"; 
 header("location: ForgetForm.php");
 } 
 
 $inEmail = $_POST["email"]; 
 $inPassword = $_POST["password"]; 

 $encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
 $stmt= $db->prepare("UPDATE PROFILE SET PASSWORD=? WHERE EMAIL = ?"); //Updating database using input credentials
 $stmt->bind_param("ss", $encryptPassword, $inEmail); //bind_param() - Binds variables to a prepared statement.
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if($result > 0)
 {
 header("location: ResetSuccessfull.php"); // user will be taken to the reset success page
 }
 else
 {
 echo "Oops. Something went wrong. Please try again"; 
 ?>
 <a href="ForgetForm.php">Try Reset Password</a>
 <?php 
 }
}
?>
</body> 
</html>