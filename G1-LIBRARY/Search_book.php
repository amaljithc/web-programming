<html>
<head><title>Search Book</title>
<style>
body {
 background-image: url("library.jpg");
  background-repeat: no-repeat; 
  background-size: cover;
  color:white;
 
}
th{
    color:white;
}

table {
background-color: rgba(0, 0, 0, 0.5);
}

</style>
</head>
<body ><br>
<font color="white"><b><i><u>
<h1 align="center" >SEARCH BOOK AND RETURN </u> </h1></i></b></font>
<br>
<form action="Search_book.php" method="post">
<h3 align="center">
Accession Number :<input type="text" name="access">
Submit<input type="submit" name="submit">
</h3>
</form>					

				
<table align="center" border="1">
			<thead>
				<th>Admission No:</th>
				<th>Issue Date</th> 	
    			<th>Due date</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('connection.php');
					$accessnum=$_POST["access"];
					$query=mysqli_query($conn,"select * from issuebook where accessno=$accessnum ");
					while($row=mysqli_fetch_array($query)){
						?>
						
						<tr>
							<td><?php echo $row['admissionno']; ?></td>
							<td><?php echo $row['issuedate']; ?></td>
							<td><?php echo $row['duedate']; ?></td>
							<td>
								<a href="return.php?id=<?php echo $row['userid']; ?>">Return</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
		<?php 

$bquery=mysqli_query($conn,"select * from book where ano=$accessnum");
while($roww=mysqli_fetch_array($bquery)){
?>
	
						<h3 align="center">	Accesssion No:<?php echo $roww['ano']; ?><br>
							Title        :<?php echo $roww['title']; ?><br>
							Author       :<?php echo $roww['author']; ?><br>
							Edition      :<?php echo $roww['edition']; ?><br>
							Publisher    :<?php echo $roww['publisher']; ?><br>
							</h3>
							<?php
					}
				?>
</body>
</html>
