<?php
    session_start();
    include('db.php'); 

?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Preterm Followup</title>
    <link rel="stylesheet" href="/doctor/page/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">

  <body>
 
  <a href="/p1/p1.html"><img src="/img/icon.png" width="50" id="icon"></a><br>
  <img src="https://cdn-icons-png.flaticon.com/512/921/921059.png"
        width="150" 
        id="d"/>
        <p> Preterm Follow&nbsp;up</p>
       
    
    <br />
   
                </h3>
            </div>
        
        <h1>SignIn</h1>
        <h2>Email</h2>
      <form action="logindb.php" method="POST">

    <?php if (isset($_SESSION['error'])) : ?>
        
       <h style="color:red;">  
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
                <?php endif ?>
                
    </h> <br>    
        <input type="text" name="email" placeholder="name@example.com" />
        <h3>Password</h3>
         <input type="password" name="password" /><br>
        
         <button type="submit" name="login_user">Sign In</button></a>
         
         <p> Not yet a member? <a href="1.php">Sign up</a></p>
</form>

  </body>
</html>
