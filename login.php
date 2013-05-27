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
    	<table border=0 cellpadding=3 cellspacing=3 align=center style="padding-top:120px;" valign="center">
	 <tr>
	    <td colspan="3" align="center"><h3>LOGIN</h3></td>
	    <td colspan="3" align="center"><h3>LOGIN</h3></td>
	  </tr>
	  <tr>
	    <td valign="top">Username:</td>
		<td><input type="text" name="username"></td> 
	  </tr>
	  <tr>
	    <td valign="top">Password:</td>
		<td><input type="text" name="password"></td> 
	  </tr>
	  <tr>
	    <td colspan="2" style="padding-left:120px;"><input type="submit" name="submit" value="Submit"></td>
	  </tr>
	</table>
	<table border=0 cellpadding=3 cellspacing=3 align=center style="padding-top:120px;" valign="center">
	 <tr>
	    <td colspan="3" align="center"><h3>LOGIN</h3></td>
	  </tr>
	  <tr>
	    <td valign="top">Username:</td>
		<td><input type="text" name="username"></td> 
	  </tr>
	  <tr>
	    <td valign="top">Password:</td>
		<td><input type="text" name="password"></td> 
	  </tr>
	  <tr>
	    <td colspan="2" style="padding-left:120px;"><input type="submit" name="submit" value="Submit"></td>
	  </tr>
	</table>
		<table border=0 cellpadding=3 cellspacing=3 align=center style="padding-top:120px;" valign="center">
	 <tr>
	    <td colspan="3" align="center"><h3>LOGIN</h3></td>
	  </tr>
	  <tr>
	    <td valign="top">Username:</td>
		<td><input type="text" name="username"></td> 
	  </tr>
	  <tr>
	    <td valign="top">Password:</td>
		<td><input type="text" name="password"></td> 
	  </tr>
	  <tr>
	    <td colspan="2" style="padding-left:120px;"><input type="submit" name="submit" value="Submit"></td>
	  </tr>
	</table>
  </form>
</body>
</html>
