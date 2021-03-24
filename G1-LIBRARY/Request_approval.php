<html>
<head><title>Student request approval</title>
<style>
body {
 background-image: url("library.jpg");
  background-repeat: no-repeat; 
  background-size: cover;
 
}
th,td{
    color:white;
}

table {

background-color: rgba(0, 0, 0, 0.5);

}

</style>
</head>
<body ><br>
<font color="white"><b><i><u>
<h1 align="center" >STUDENT REQUEST APPROVAL</u> </h1></i></b></font>

<table align="center" border="2"cellspacing="2" cellpadding="15">
<tr>
<th>Admission No</th>
<th>Name</th>
<th>Department</th>
<th>Semester</th>
<th>Mobile No</th>
<th>Email Id</th>
<th>Password</th>
<th>Action </th>
</tr>
<?php
					include('connection.php');
					$query=mysqli_query($conn,"select * from student");
					while($row=mysqli_fetch_array($query)){
						?>
						
						<tr>
							<td><?php echo $row['Adno']; ?></td>
							<td><?php echo $row['Name']; ?></td>
							<td><?php echo $row['Department']; ?></td>
							<td><?php echo $row['Semester']; ?></td>
							<td><?php echo $row['Mobile']; ?></td>
							<td><?php echo $row['Email']; ?></td>
							<td><?php echo $row['Password']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Approve</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Reject</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>


</body>
</html>
