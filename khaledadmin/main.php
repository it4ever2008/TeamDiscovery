<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />


<title>Main</title>
<style type="text/css">
body {
	background-color:#FFFFFF;
}
.style1 {
	color: #FF0000;
	font-weight: bold;
}
</style>
<script type="text/javascript">
	$(document).ready(function() {
	$("#nav li").prepend("<span></span>"); //Throws an empty span tag right before the a tag
	$("#nav li").each(function() { //For each list item...
	  var linkText = $(this).find("a").html(); //Find the text inside of the <a> tag
	  $(this).find("span").show().html(linkText); //Add the text in the <span> tag
	}); 
	$("#nav li").hover(function() {	//On hover...
		$(this).find("span").stop().animate({
			marginTop: "-40" //Find the <span> tag and move it up 40 pixels
		}, 250);
	} , function() { //On hover out...
		$(this).find("span").stop().animate({
			marginTop: "0"  //Move the <span> back to its original state (0px)
		}, 250);
	});
});
</script>
<style type="text/css" media="screen">
	body { background:#282828; padding:0; margin:0; }
	.bordertop { height:8px; width:auto; background:#129395;  }
	h1 { color:#fff; font:38px georgia; text-align:center; padding-top:45px; margin:0; }
	h2 { color:#fff; font:34px georgia; text-align:center; padding-top:4px; margin:0; }
	h3 {  color:#fff; text-align:center; font:11px normal Verdana, Arial, Helvetica, sans-serif; margin:auto; padding-top:2px; letter-spacing:13px;  }
	/* Begain Nav Css */
    #navigation { width:575px; height:40px; margin:auto; margin-top:25px; }
    ul#nav { margin:0; padding:0; list-style-type:none; font-size:0.8em; }
    ul#nav li { margin:0; padding:0; overflow:hidden; float:left; height:40px; }
    ul#nav a, ul#nav span { padding:0px 20px; float:left; text-decoration:none; color:#fff; background:url(images/a_bg.gif) repeat-x; clear:both; text-transform:uppercase; height:40px; line-height:40px; }
    ul#nav a { color:#555; background-position:left bottom; }
    ul#nav span { background-position:left top; }
</style>
</head>

<body>
<?
if(!isset($_SESSION[username])){
?>
<script type="text/javascript">
window.location = "index.php"; </script>
<?
die();
}
?>
<div align="right" class="wel" style="float:right">
<b class="wel"> Welcome </b>: 
<? echo $_SESSION[username]; ?></div>
<div class="bordertop"></div>
<div><a href="index.php" class="wel">logout</a></div>
	<h1>Control Panel For My Site</h1>
	<h2>Advance projects guide</h2>
	 <div id="navigation">
<ul class="menu" id="nav">

   
</ul>

</div>

</body>
</html>
