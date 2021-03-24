<?php 
include "connection.php";
?>
<html>
<title>Library</title>
<head>		
<style>
input
{
height:40px;
width:450px;
}
#but
{
height:50px;
color:red;
width:170px;
}
</style>
<link rel="stylesheet" type="text/css" href="home_styl.css" />
</head>
	<body background="library.jpg"  STYLE="BACKGROUND-REPEAT:NO-REPEAT;BACKGROUND-SIZE:COVER;">
		<div id="allTheThings">
<TABLE STYLE="background-color: rgba(0, 0, 0, 0.8);" ALIGN="CENTER" WIDTH="60%" height="90%">
<TR>
<TH><B><H1><FONT COLOR="#ffffff" <FACE="TIMESNEWROMAN"><BR>ENTER BOOK DETAILS</FONT></H1></B></TH>
</TR>
<TR>
<TH>

		<form method="POST" action="#">			
					<input  type="number" name="ano" placeholder="Accession Number" required /><BR><BR>
					<input  type="text" name="title" placeholder="Title" required /><BR><BR>							
					<input  type="text" name="author" placeholder="Author" required /><BR><BR>
					<input type="number" name="edition" placeholder="Edition" required /><BR><BR>
					<input type="text" name="publisher" placeholder="Publisher" required /><BR><br>		
				<br />
				<input type="submit" id="but" name="add" value="ADD BOOK" />
		</form>
</TH>
</TR>
</TABLE>
</div>
</body>
</html>
<?php
 include "connection.php"; 
 if(isset($_POST["add"]))
{
 $ano=$_POST["ano"];
 $title=$_POST["title"];
 $author=$_POST["author"];
 $edition=$_POST["edition"];
 $publisher=$_POST["publisher"];
$sql="insert into book values($ano,' $title','$author',$edition,'$publisher')";
if (mysqli_query($conn, $sql)) {
  echo '<script>alert("New record created successfully");</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>