<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="libraryy"; 
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
  echo "Connection failed";
}
?>