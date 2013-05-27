<?php

$objLang=new Translation();
   
    if($_REQUEST['addlang']==1)
	{ 
		if($_REQUEST['createlang']=="Create"){	
		$retString=$objLang->addTransl($_REQUEST);	
		}

		if($_REQUEST['createlang']=="Update"){
			$retString=$objLang->updateTransl($_REQUEST);	
		}
	}
	if($_REQUEST['delete']==1)
	{ 
	  $retString=$objLang->deleteKey($_REQUEST['id']);
	}
    unset($_SESSION['lang']);
	$_SESSION['lang']=$_REQUEST['lang'];
	if($_REQUEST['lang']=='')
	   $_SESSION['lang']='28';
?>

<html>
<head>
  <script>
    function fnsubmit()
	{
	 document.langform.submit();
	 val=document.getElementById("lang").value;
	 document.location.href="/home/listkeylang/lang/"+val;
	}
  </script>
</head>
<body align="center">
<table align="center" width="90%">
	<tr>
		<td colspan="2" align="center">
		<h3><?=$txt?></h3>
		<h3>List Of Languages</h3></td>		
	</tr>
	<tr>	
		<td align="right"><a href="/home/languagesettings/addLang/1/<?=$SegmentId?>" >Create Language</a> | <a href="/home/addlanguage">Add Language Key</a> | <a href="/home/listkeylang/">List Language Key</a></td>
	</tr>
    <tr>
	   
	   <td>Language:
	     <?
			$lang=$objLang->getLang();
			echo $lang;
		?>
	   </td>
    </tr>	
	<tr>
		<td>
		<?
			$langlist=$objLang->getKeyList();
			echo $langlist;
		?>
		</td>
	</tr>
</table>
<div style="display:block">

<h5>&copy; 1998-2013 -- Langauage Logy</h5>

</div>

<br><br>
</body>
</html>
