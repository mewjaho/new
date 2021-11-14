<?php
require('Db.php');
 $HN=$_GET['HN'];
 $sql="SELECT * FROM Medical WHERE HN= $HN";
 $result=mysqli_query($connect,$sql);

 $row=mysqli_fetch_assoc($result);




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>แก้ไขข้อมูลผู้ป่วย</title>
  <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="/sql/index.css">
  <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
</head>
<body >
  
  <h2> แบบฟอร์มแก้ไขข้อมูลผู้ป่วย</h2>
  <form action="update.php " method="POST">
    <input type="hidden" value="<?php echo $row['HN'];?>" name="HN">
    <div>
      <label for="firstname">ชื่อผู้ป่วย</label>
      <input type="text" name="fname" id=""  class="form-control" value="<?php echo $row["fname"];?>">
    </div>
    <div>
      <label for="lastname">นามสกุล </label>
      <input type="text" name="lname" id=""class="form-control" value="<?php echo $row["lname"];?>">
    </div>
    <div class="from-group">
      <label for="gender">เพศ</label>
      <input type="radio" name="gender" value="ชาย">ชาย
      <input type="radio" name="gender" value="หญิง">หญิง

    </div>



    <input type="submit" value="อัปเดทข้อมูล">
  </form>
  <a href = "index.php">กลับหน้าแรก</a>
  
</body>
</html>