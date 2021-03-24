<html>

<body style="background-image:url('library.jpg'); background-size:cover;">
<br><br><br>
<h1><u><center><font style="color:pink">Details of book</center></u></h1><br>
<form method="POST" action="search.php" align="center">
	<font style="color:white"><h3>enter the title</font> <input type="text" name="tsearch"/>
	<input type="submit" name="submit" /></h3>
	
</form>
<?php
$conn=mysqli_connect("localhost","root","","libraryy");
if(!$conn)
{
 echo "connection failed!";
}
if(isset($_POST['submit']))
{
$search=$_POST['tsearch'];

$sql="select * from book where title='$search' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
{
?>

<table border="2" align="center" cellpadding="5" cellspacing="5" style="background-color:white; margin-left:auto; margin-right:auto;">

<tr>
<th> access_no</th>
<th> title </th>
<th> author </th>
<th> edition </th>
<th> publisher </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["access_no"];?> </td>
<td><?php echo $row["title"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["edition"];?> </td>
<td><?php echo $row["publisher"];?> </td>
</tr>
<?php
}
}
else
echo "<b><center><b>No books found in the library by the name $search </b></center>" ;
}
?>
</table>

</body>
</html>



