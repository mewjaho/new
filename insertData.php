<?php
require('Db.php');

$HN=$_POST['HN'];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];

$sql = "INSERT INTO Medical(fname,lname,gender) VALUES('$fname','$lname','$gender')";

$result=mysqli_query($connect,$sql);

if($result){
  header('location:index.php');
  exit(0);

} else { echo myqli_errors($connect);}
?>