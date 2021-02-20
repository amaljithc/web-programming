<html><head><title>php validation</title>


</head>
<body><form  method="POST" name="myForm">
<br><table border=2>
<tr>
<td>name 	 :</td><td><input type="text" name="vname"></td></tr>
<tr>
<td>branch	 :</td><td><select type="text"  name="vbranch">
<option >select
<option>MCA CS
<option>MCA PHY
<option>MCA CHE
</select></td></tr>
<tr>
<td>email	 :</td><td><input type="text" name="vemail"></td></tr>
<tr>
<td>mobile	 :</td><td><input type="text" name="vmobile"></td></tr>
<tr>
<td>password	 :</td><td><input type="password" name="vpassword"></td></tr>
<tr>
<td>confirm 	 :</td><td><input type="password" name="vconfirm"></td></tr>
<tr>
<td></td><td><input type="submit" name="vsubmit" value="submit"></td></tr>
</table>
</form></body></html>
<?php 
if(isSet($_POST['vsubmit']))
{
  	if(empty($_POST['vname']))
  		{
   			echo'<script>alert("enter name");</script>';
  		}
	else if(empty($_POST['vemail']))
	{
		echo'<script>alert("enter email");</script>';
	}
	else if($_POST["vbranch"]=="select")
	{
		echo'<script>alert("select branch");</script>';
	}
	else if((strlen($_POST['vmobile'])!=10)||!(is_numeric($_POST['vmobile'])))
	{
		echo'<script>alert("enter a valid number");</script>';
	}
	else if(strlen($_POST['vpassword'])<9)
	{
		echo'<script>alert("password must be atleast 8 letter");</script>';
	}
	else if($_POST['vpassword']!=$_POST['vconfirm'])
	{
		echo'<script>alert("password mismatch");</script>';
	}
	
  	else
  	{
		echo'<script>alert("success");</script>';
  	}
}
?>