<!DOCTYPE HTML>
<html>
<head>
<title>Login Form</title>

<link rel = "stylesheet" type = "text/css" href="StyleLogin.css"/>

<script type="text/javascript">
 
function validate()
{
var email = document.login.email.value;
var password = document.login.password.value;
 
if (email==null || email=="")
{
  alert("Email can't be blank");
  return false;
}
else if (password==null || password=="")
{
  alert("password can't be blank");
  return false;
}
}
</script>
</head>
<body>
 
<div style="text-align:center"><h2>User Login</h2></div>
<br>
<form name="login" method="post" action="Login.php" onsubmit="return validate();" >
<div>Email: <input type="email" name="email" /> </div>
<div>Password: <input type="password" name="password" /> </div>
<br/>
<div><a href="ForgetForm.php">Forget Password?</a></div>
<div class="login"><input type="submit" value="Login"></input></div>
</form>
</body>
</html>