<html>
<head></head>
<body style="background-image:url(library.jpg);">
<center>
<form method="post">
<table bgcolor="red" height="10%" width="50%">
	<caption><h2 style="color:white;">Issue Book</h2></caption>
	<tr><th style="color:white;">AccessNo:</th><th><input type="number" name="accessno"></tr></th>
	<tr><th style="color:white;">Admission No:</th><th><input type="number" name="admissionno"></tr></th>
	<tr><th style="color:white;">IssueDate:</th><th><input type="text" name="issuedate"></tr></th>
	<tr><th style="color:white;">BookTitle:</th><th><input type="text" name="booktitle"></tr></th>
	<tr><th style="color:white;">DueDate:</th><th><input type="text" name="duedate"></tr></th>
	<tr><th colspan="2"><input type="submit" name="issue"></tr></th>
</table>
</form>
</center>
</body>
</html>
<?php
	$con=mysqli_connect("localhost","root","","library");
	if(!$con)
	{
		echo "error";
	}
	else
	{
		if(isset($_POST["issue"]))
		{
			$accessno=$_POST["accessno"];
			$admissionno=$_POST["admissionno"];
			$issuedate=$_POST["issuedate"];
			$booktitle=$_POST["booktitle"];
			$duedate=$_POST["duedate"];
			$sql="insert into book values($accessno,$admissionno,$issuedate,'$booktitle',$duedate)";
			if(mysqli_query($con,$sql))
			{
				echo "success";
			}
			else
			{
				echo "error";
			}
		}
	}
?>