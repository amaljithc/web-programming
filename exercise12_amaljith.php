<html>
<head></head>
<body>
  <center>
  <h4>enter student details</h4>
  <form name="form" method="post">
  Reg no:<input typ="text" name="reg_no"><br><br>
  Name    :<input type="text" name="name"><br><br>
  Subject:<input type="text" name="subject"><br><br>
  Mark    :<input type="text" name="mark"><br><br>
  <input type="submit" name="submit">
  </form></center>
</body></html>
<?php
  $con=mysqli_connect("localhost","root","","amal");
  if(!$con)
  {
    echo "error";
  }  
  else
  {
    if(isset($_POST["submit"]))
    {
      $adno=$_POST["reg_no"];
      $name=$_POST["name"];
      $sub=$_POST["subject"];
      $mark=$_POST["mark"];
      $sql="insert into student values($adno,'$name','$sub',$mark)";
      if(mysqli_query($con,$sql))
      {
        echo"success";
      }
      else
      {
        echo"error";
      }
    }
  }
?>
<html>
<head></head>
<body>
<?php
  $con=mysqli_connect("localhost","root","","amal");
  if(!$con)
  {
    echo"error";
  }
  else
  {
    $query='select * from student';
    $val=mysqli_query($con,$query);
    if(mysqli_num_rows($val))
    {
      echo'<html><body><table align="center" border="2"><caption><h3 style="color:red;text-align="center">Students Mark</h3></caption><tr>
        <th>Adno</th><th>Name</th><th>Subject</th><th>Mark</th></tr>';
      while($row=mysqli_fetch_assoc($val))
      {
        echo'<tr><td>'.$row["reg_no"].'</td>'.'<td>'.$row["name"].'</td>'.'<td>'.$row["subject"].'</td>'.'<td>'.$row["mark"].'</td></tr>';
      
      }
      echo'</table></body></html>';
    }
  }
?>
</body></html>