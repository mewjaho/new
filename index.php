<?php
require("Db.php");
$sql = "SELECT * FROM Medical";

$result=mysqli_query($connect,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ข้อมูลผู้ป่วย</title>
  <link rel="stylesheet" href="/sql/index.css">
  <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet"> 
   
</head>
<body >
<nav class="navbar navbar-expand-lg " style="background-color: rgb(146,211,110)" >
        <div class="container-fluid">
        <img
            src="/img/b.png"
            alt=""
            width="30"
            height="30"
            class="d-inline-block align-text-top"
          />&nbsp;&nbsp;
          <a class="navbar-brand" href="#">Preterm</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/doctor/page/d1.html">บันทึกข้อมูล</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link " style="margin-left: 950px;" href="/login/doctor.php"   onclick="return confirm('คุณต้องการออกจากระบบหรือไม่')" >ออกจากระบบ</a>
              </li>
             
            </ul>
          
        
          </div>
        </div>
      </nav>
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="card mt-3 " >
            <div class="card-body" >
              <div class="row">
                <div class="col-sm-4">
                  <img src="/img/doctor2.png" width="150px" />
                </div>
                <div class="col-sm">
                  <h1> </h1>
                  <p> ดร. สลัม หนูน้อยอาลา </p>
                  
           
          

                 
                </div>
</div>
</div>
</div>
</div>

      
      
 

      <?php if($count>0){}?>
       
       <form action="search.php" class="form-group mt-3 " method="POST"  style="text-align: center;">
         <label for="">ค้นหาผู้ป่วย</label>
         <input type="text" placeholder="Hospital Number" name="HNemployee" class="from-contrl">
         <input type="submit" value="search" class="btn btn-primary my-3">
        </form>
     
      
  

<div class ="container mt-5">
<h1 class="text-center" style=" font-family: Mali, cursive;" > ข้อมูลผู้ป่วย </h1>
<table class="table table-hover mt-4">
    <thead>
      <tr style="background-color: rgb(146,211,110)">
        <th> Hospital Number </th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>เพศ</th>
        <th>แก้ไขข้อมูล</th>
        <th>ลบข้อมูล</th>

      </tr>
    </thead>
    <tbody>
    <?php while($row=mysqli_fetch_assoc($result)){?>
      <tr>
      <td><?php echo $row["HN"] ?></td>
      
      <td><?php echo $row["fname"]?></td>
      <td><?php echo $row["lname"]?></td>
      <td><?php echo $row["gender"]?></td>
      <td> 
        <a href= "edit.php?HN=<?php echo $row["HN"];?>" class="btn btn-primary">แก้ไข</a>
      </td>
      <td>
        <a href="delete.php?idp=<?php echo $row["HN"];?>" class="btn btn-danger" 
        onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')"
        >ลบข้อมูล</a>

      </td>
    </tr>
  <?php } ?>
  </tbody>
 </table>


<a href="insertForm.php" class="btn btn-success" style="  font-family: Mali, cursive;">เพิ่มข้อมูลผู้ป่วย</a><br>
<div class="row mt-3">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body " style="text-align: center;" >
      <img src="/img/folder.png" width="100px"><br>
        <h5 class="card-title"></h5>
        <p class="card-text">แบบบันทึกข้อมูล</p>
        <a href="/doctor/page/d1.html" class="btn btn-primary">แบบบันทึกข้อมูล</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body "style="text-align: center;">
      <img src="/img/line-chart.png"  width="100px">
        <h5 class="card-title"></h5>
        <p class="card-text">กราฟ</p>
        <a href="#" class="btn btn-primary">กราฟ</a>
      </div>
    </div>
  </div>
</div>


  


</div>
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>

  
  
  
</body>
</html>