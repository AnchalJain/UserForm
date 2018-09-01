
<!DOCTYPE HTML>
<html>
<head>
<title>Reset Password</title>

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
<div style="text-align:center"><h1>Reset Password</h1></div>
<br>
<form name="Reset" method="post" action="Forget.php" onsubmit="return validate();" >
<div>Email: <input type="email" name="email" /> </div>
<div>New Password: <input type="password" name="password" /> </div>
<br/>

<div class="reset"><input type="submit" value="Reset"></input></div>
</form>
</body>
</html>
