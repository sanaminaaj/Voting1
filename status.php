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
 $name=$_POST['name'];
 $party1=$_POST['party1'];
 $party2=$_POST['party2'];
 $sql="insert into status(name,party1,party2)
VALUES('$name','$party1','$party2')";
$result= mysqli_query($conn,$sql);
if(!$result){
  echo "Error:" .mysqli_error($conn);
  exit;
}
echo "Voting is successful";
mysqli_close($conn);
?>