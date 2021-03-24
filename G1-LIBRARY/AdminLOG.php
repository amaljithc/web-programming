<html>
<head><title >Login page</title>
<link rel="stylesheet" type="text/css" href="logincss.css">
<body> 
<div class="loginbox">
<img src="username.jfif" class="username">
<h1>Admin Login here..</h1>
<form>
<p>Username:</p><br>
<input type="text" name="" placeholder="Enter username:"><br><br>
<p>password</p>
<input type="password" name="" placeholder="Enter password">
<input type="submit" name="" value="Login">
</form>
</div>
</body>
</head>
</html>

<?php
       
        include ("connection.php");

        if(isset($_POST['submit']))
		{

            $user = $_POST['user'];
            $password = $_POST['password'];
        
            $login_query = "select * from admin where username='$user'and password='$password'";
            $login_result = mysqli_query($conn,$login_query);
            $login_vlaues = mysqli_fetch_array($login_result);
           if(!$login_result)
		   {
            echo "login error";
		   }
			$login_rows = mysqli_num_rows($login_result);
			if($login_rows == 1)
			{
            header("location:Admin_home.php");
			}
        
		}
		
            
?>
    