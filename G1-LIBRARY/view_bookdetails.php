<?php
$conn=mysqli_connect("localhost","root","","libraryy");
if(!$conn)
{
 echo "connection failed!";
}
else

$sql1="select * from book";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1))
{
	echo '<table border="1"><tr><th>accession_number</th><th>title</th><th>author</th><th>edition</th><th>publisher</th></tr>';
	while($row=mysqli_fetch_assoc($result1))
	{
	 	echo '<tr><td>'.$row["access_no"].'</td><td>'.$row["title"].'</td><td>'.$row["author"].'</td><td>'.$row["edition"].'</td><td>'.$row["publisher"].'</td></tr>';
	}
	echo '</table>';
}
else
{
 	echo "table empty";
}

mysqli_close($conn);
?> 