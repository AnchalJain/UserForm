<html>
<title>userProfile.php</title>
<head>
	<style>
		a{
 background-color: #4CAF50;
 border: none;
 color: white;
 padding: 16px 32px;
 text-decoration: none;
 margin: 4px 2px;
 cursor: pointer;
 }
	</style>
	
</head>
<body>
 <?php
 session_start();
 $email = $_SESSION['email']; //retrieve the session variable
 ?>
 
 <div style="text-align:center"><h1>User Profile</h1></div>
 <br/>
 
 <div style="font-weight:bold"> <center>Welcome <?php echo $email ?></center></div>
  <br/><br/><br/>
 <div style="text-align: right"><center><a href="Logout.php">Logout</a></center></div> <!-- calling Logout.php to destroy the session -->
 
 <?php
 if(!isset($_SESSION['email'])) //If user is not logged in then he cannot access the profile page
 {
 
 header("location:LoginForm.php");
 }
 ?>
</body>
</html>