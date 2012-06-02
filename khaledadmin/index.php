<?php 
session_start();
include("classes/indexlogin.class.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Login Page</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div>


<div class="mesg" align="center">
<br />
<br />
<?
if(isset($_POST[b1])){
$m= new login();
if($m->islogin($_POST[t1],$_POST[t2]))
{
$_SESSION[username]=$_POST[t1];

?>
<script type="text/javascript"> 
window.location="main.php";
</script>
<?

}
else{
echo  "Please make sure your user name and password";
}
}

?>
</div>
<div>
	<form id="login-form" action="" method="post">
		<fieldset>
		
			<legend>Log in</legend>
			
			<label for="login">username</label>
			<input type="text" id="t1" name="t1"/>
			<div class="clear"></div>
			
			<label for="password">Password</label>
			<input type="password" id="t2" name="t2"/>
			<div class="clear"></div>
			
			<div class="clear"></div>
			
			<br />
			
			<input name="b1" type="submit" class="button" id="b1" style="margin: -20px 0 0 287px;" value="Log in"/>	
		</fieldset>
	</form>
	</div>
	</div>
</body>

</html>