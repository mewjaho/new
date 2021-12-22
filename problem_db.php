<?php
require('Dm.php');
$HN=$_POST['HN'];
$Problem=implode(",",$_POST['Problem']);
$milk=implode(",",$_POST['milk']);
$medicine=implode(",",$_POST['medicine']);
$devo=implode(",",$_POST['devo']);
$etc=implode(",",$_POST['etc']);
$why=$_POST['why'];
$sql = "INSERT INTO m4(HN,Problem,milk,medicine,devo,etc,why) VALUES ('$HN','$Problem','$milk','$medicine','$devo','$etc','$why')";
$result=mysqli_query($connect,$sql);
if($result){
  echo "สำเร็จ";
 
}else { 
 echo "no";
 }

?>