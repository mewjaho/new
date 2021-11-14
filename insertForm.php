<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>บันทึกข้อมูลผู้ป่วย</title>
  <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="/sql/index.css">
  <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
</head>
<body style="text-align: center;">
  <h2 style="font-family: Mali, cursive;margin-top: 50px;"> แบบฟอร์ม</h2>
  <form action="insertData.php " method="POST">
  <div>
      <label for="">Hospital Number</label>
      <input type="text" name="HN" id="">
    </div><br>
    <div>
      <label for="">ชื่อผู้ป่วย</label>
      <input type="text" name="fname" id="">
    </div><br>
    <div>
      <label for="">นามสกุล</label>
      <input type="text" name="lname" id="">
    </div><br>
    <div class="from-group">
      <label for="gender">เพศ</label>
      <input type="radio" name="gender" value="ชาย">ชาย
      <input type="radio" name="gender" value="หญิง">หญิง

    </div><br>
    <input type="submit" class="btn btn-success"value="บันทึกข้อมูล">
  </form>
  <a href = "index.php">กลับหน้าแรก</a>
  
</body>
</html>