<?php
  $db_hostname= "127.0.0.1";
  $db_username= "root";
  $db_password= "";
  $db_name= "voting";
  
  $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
  if(!$conn){
  echo "Connection failed".mysqli_Connect_error();
exit;
}
 $username=$_POST['username'];
 $password=$_POST['password'];
 $phonenumber=$_POST['phonenumber'];
 $confirmpassword=$_POST['confirmpassword'];
 $sql="insert into user(username, phonenumber, password, confirmpassword)
VALUES('$username','$phonenumber','$password','$confirmpassword')";
$result= mysqli_query($conn,$sql);
if(!$result){
  echo "Error:" .mysqli_error($conn);
  exit;
}

echo "Registration successful";
mysqli_close($conn);
?>