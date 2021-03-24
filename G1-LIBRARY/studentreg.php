<html><head><title>student registration</title>
<body>
<link rel="stylesheet" style="text/css" href="studentregcss.css">

<div class="regbox">
<h1>Register Here..</h1>
<form name="studentregform" method="post" >
<input type="text" name="uadno" placeholder="Enter admission no">
<input type="text" name="uname" placeholder="Enter Name">
<input type="text" name="udepartment" placeholder="Enter Department">
<input type="text" name="usemester" placeholder="Enter semester">
<input type="text" name="umobile" placeholder="Enter mobile no ">
<input type="text" name="uemail" placeholder="Enter Email">
<input type="password" name="upassword" placeholder="Enter password">
<input type="password" name="uconfirm" placeholder="Confirm password">
<input type="submit" name="register" value="Register">
<a href="login.php"><input type="button" name="signin" value="Sign in"></a>


</form>
</div>

</body>
</head></html>
<?php 
$con=mysqli_connect("localhost","root","","libraryy");
if(!$con)
{
echo"error";
}
else
{
if(isset($_POST["register"]))
{
 if(!(is_numeric($_POST["uadno"]))||strlen($_POST["uadno"])!=6)
{
echo'<script>alert("admission no should be six digit");</script>';
}
else if(empty($_POST["uname"]))
{
echo'<script>alert("name field cannot be empty");</script>';
}
else if(empty($_POST["udepartment"]))
{
echo'<script>alert("department field cannot be empty");</script>';
}
else if(empty($_POST["usemester"]))
{
echo'<script>alert("semester field cannot be empty");</script>';
}
else if (!filter_var($_POST["uemail"], FILTER_VALIDATE_EMAIL)) {
  echo'<script>alert("Invalid email format");</script>';
}
else if(!(is_numeric($_POST["umobile"]))||strlen($_POST["umobile"])!=10)
{
echo'<script>alert("invalid mobile number");</script>';
}
else if(strlen($_POST["upassword"])<8||$_POST["upassword"]!=$_POST["uconfirm"])
{
echo'<script>alert("password atleast 8 letter or password mismatch");</script>';
}
else 
{
$adno=$_POST["uadno"];
$name=$_POST["uname"];
$department=$_POST["udepartment"];
$sem=$_POST["usemester"];
$email=$_POST["uemail"];
$mobile=$_POST["umobile"];
$password=$_POST["upassword"];
$flag=0;
$sql="insert into student values($adno,'$name','$department','$sem',$mobile,'$email','$password',$flag)";
if(mysqli_query($con,$sql))
{
echo'<script>alert("success");</script>';
}
else
{
echo'<script>alert("error");</script>';
echo"error".$sql.mysqli_error($con);
}
}
}
}
?>

