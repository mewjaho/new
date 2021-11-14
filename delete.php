<?php
require('Db.php');
$HN= $_GET['idp'];

$sql="DELETE FROM Medical WHERE HN=$HN";
$result=mysqli_query($connect,$sql);


if($result){
 header('location:index.php');
  exit(0);
}else{
echo "เกิดข้อผิดพลาด";
}
?>