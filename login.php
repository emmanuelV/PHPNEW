<?php
$objLog= new Login();

if($_REQUEST['submit']!='')
{
  $retString=$objLog->checkLogin($_REQUEST);
}
?>

<html>
<body>
<h3 align="center" ><?=$retString?></h3>
  <form name="loginform" method="POST" action="/home/login">
	<div>
	<label for="username">Username: </label>&nbsp;<input type="input" value=""></input>
	<label for="pw">password: </label>&nbsp;<input type="password" value=""></input>
	<input type="Submit" value="Submit"></input>
	<input type="button" value="forgot password" onclick="/$('#getNewPw').css({'display':'block'})"/></input>
	</div>
	<div style="display:none;" id="getNewPw">
		<label for="username">Username:</label>&nbsp;<input type="input" value=""></input>
		<label for="npw">Enter your email: </label>&nbsp;<input name="email" id="email" type="email" value=""></input>
		
		if(email!=="" and email!=="null")
		{
		 <p>We have sent new password to your email address</p>
		}
	</div>
  </form>
</body>
</html>
