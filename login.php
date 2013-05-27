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
	<input type="Submit"></input>
	</div>
  </form>
</body>
</html>
