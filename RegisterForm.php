<!DOCTYPE HTML>
<html>
<head>
<title>Register Form</title>

<link rel = "stylesheet" type = "text/css" href="Style.css"/>

<script>
function validate()
{ 
var fullname = document.register.fullname.value;
var email = document.register.email.value;
var password = document.register.password.value;
var conpassword= document.register.conpassword.value;
if (fullname==null || fullname=="")
{ 
alert("Full Name can't be blank"); 
return false; 
}
else if (email==null || email=="")
{ 
alert("Email can't be blank"); 
return false; 
}
else if(password.length < 6)
{ 
alert("Password must be at least 6 characters long."); 
return false; 
} 
} 
</script> 
</head>
<body>
 
  <div style="text-align:center"><h2>Registe User</h2></div>
 <br>
<form name="register" method="post" action="Register.php" onsubmit="return validate();" >
 
<table align="center" >
<tr>
<td>Full Name</td>
<td><input type="text" name="fullname" /></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Register"></input><input
type="reset" value="Reset"></input></td>
</tr>
</table>
</form>
</body>
</html>