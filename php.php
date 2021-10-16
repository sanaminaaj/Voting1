<?php
$servername="localhost";
$username="root";
$password="";
$database_name="login";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
  die("Connection Failed:" +mysqli_connect_error());
}

if(isset($_POST['sava']))
{
 $username=$_POST['user'];
 $pwd=$_POST['pwd'];
 $sql_query="INSERT INTO entry_details(username,pwd)
 VALUES('$username','$pwd');
if(mysqli_query($conn,$sql_query))
{
 echo "Successful";
}
else
{
echo "error":
}
mysqli_close($conn);
}
?>
