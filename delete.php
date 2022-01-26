<?php
require('Dm.php');

$HN=$_POST['HN'];
$date=$_POST['date'];
$da=$_POST['da'];
// $da=$_GET['idp'];
// $sql="DELETE  FROM m3 WHERE da='$da' ";

// $result=mysqli_query($connect,$sql);

// if($result){
//  echo"ลบข้อมูลสำเร็จ";
//   exit(0);
// }else{
// echo "เกิดข้อผิดพลาด";
// }
// echo $HN;
// echo $da;
$sql="DELETE  FROM m3 WHERE da='$da'and HN='$HN' ";
$result=mysqli_query($connect,$sql);
if($result){
 echo"ลบข้อมูลสำเร็จ";
  exit(0);
}else{
echo "เกิดข้อผิดพลาด";
}
?>
