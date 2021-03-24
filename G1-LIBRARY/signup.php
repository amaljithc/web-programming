<?php 
include "connection.php";
?>

<html>

<head>
 
    <title>Student registration</title>
</head>

<body>
   
    <form name="form" action="#" method="POST">
        <table>
            <tr>
               <th colspan="2" style="text-align:center;color:red">SIGN UP</th>
            </tr>
			<tr>
                <th>Admission number </th>
                <td><input type="int" name="fad"> </td>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="fname"> </td>
            </tr>
			 <tr>
                <th>Department</th>
                <td><input type="text" name="fdep"> </td>
            </tr>
			 <tr>
                <th>Sem</th>
                <td><input type="int" name="fsem"> </td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email"> </td>
            </tr>
            <tr>
                <th>Mob NO </th>
                <td><input type="tel" name="mob"> </td>
            </tr>
            <tr>
                <th>Username </th>
                <td><input type="text" name="user"> </td>
            </tr>
            <tr>
                <th>Password </th>
                <td><input type="password" name="password"> </td>
            </tr>
			<tr>
                <th>RE Password </th>
                <td><input type="password" name="repassword"> </td>
            </tr>
            <tr class="center">
                <th colspan="2"><input class="sb-btn" type="submit" value="Sign Up" name="submit"></th>
            </tr>
            <tr class="center">
                <th colspan="2"><a href="LOG.php" style="color:red;text-decoration:none;">Login instead ? </a></th>
            </tr>
        </table>
    </form>

</body>
</html>
<?php
 include "connection.php";
 
if(isset($_POST["submit"]))
{
		$ad = $_POST['fad'];  
        $name = $_POST['fname']; 
        $dep = $_POST['fdep'];  
        $sem= $_POST['fsem'];  		
        $email = $_POST['email'];  
        $mobile = $_POST['mob'];  
        $user = $_POST['user'];  
        $password = $_POST['password'];
$sql="insert into student values($ad,'$name','$dep',$sem,'$email',$mobile,'$user','$password')";
if (mysqli_query($conn, $sql)) {
  echo '<script>alert("New record created successfully");</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>