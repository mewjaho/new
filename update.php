<?php
require('Db.php');

$HN=$_POST['HN'];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];

$sql="UPDATE Medical SET fname='$fname',lname='$lname', gender='$gender' WHERE HN =$HN";

$result=mysqli_query($connect,$sql);
if($result){

  header("location:index.php");
  exit(0);
}else{
echo "เกิดข้อผิดพลาด";

}
?>