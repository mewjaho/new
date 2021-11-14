
<?php
require("dbm.php");
$sql = "SELECT * FROM Medical";

$result=mysqli_query($connect,$sql);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Preterm Followup</title>
    <link rel="stylesheet" href="loginm.css" />
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
   

  <body >


  
      <img 
        src="https://cdn-icons-png.flaticon.com/512/3790/3790737.png" width="120"
         />
        <p> Preterm Follow&nbsp;up</p>
    
    <br />
  
       <h1>Hospital Number</h1>
       <form action="login_db.php" method="POST"> 
       
       <?php if (isset($_SESSION['error'])) : ?>
         
        <h style="color:red;">  
                 <?php 
                     echo $_SESSION['error'];
                     unset($_SESSION['error']);
                 ?>
                 <?php endif ?><br>

       <input type="text" name="" placeholder="Hospital Number"><br>
       <button type="submit"name="HN"  >Sign In</button></a>
       
</form>
    
    

</html>
