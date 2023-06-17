<!DOCTYPE html>
<html lang="UTF-8" >
<head>
  <meta charset="UTF-8">
  <title>isource Login + Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="./style.css">
<style>
  

body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
</style>
</head>
<body>

<div id="back">
  <canvas id="canvas" class="canvas-back"></canvas>
  <div class="backRightu">    
  </div>

</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js'></script>
<script  src="./script.js"></script>

</body>

<?php

        $h1=$_REQUEST['username'];
        $h2=$_REQUEST['password'];
        $h3=$_REQUEST['email'];


        $ins="insert into memberlist(NAME,PASS,EMAIL)
        values(
        '$h1','$h2','$h3')";
        
        $con=mysqli_connect("www.isource.com","root","13805668","isource");
        if (!$con) {
        die(""."</br>" . mysqli_connect_error());
     }
      echo ""."</br>";

       if (mysqli_query( $con,$ins))
        {   
            echo ""."</br>"; 
        }
        else
        {    
            echo "insert not done"."</br>";
        }      
 */
?>
<?php
$t1=$_REQUEST['husername'];
$t2=$_REQUEST['hpassword'];
$con=mysqli_connect("localhost","root","","isource");
  

        $sql = "SELECT * FROM users WHERE NAME='$t1' AND PASS='$t2'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
          echo "<div class='rainbow'><center style='margin-top:100px;font-size: 20px;'><B><P>: با موفقیت وارد حساب کاربری شدید اطلاعات شما شامل</P></B>
          <table border='8'><tr><th>شماره تلفن</th><th>حنسیت</th><th> کلمه عبور</th><th>نام کاربری</th></tr></center></div>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["phone_number"]."</td><td>".$row["EMAIL"]."</td><td>".$row["PASS"]."</td><td>".$row["NAME"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "<div class='rainbow'><center style='margin-top:150px;font-size: 40px;'>   !!! هیچ کاربری با این اطلاعات یافت نشد </center></div>";
        }
      

$con->close();


?>
</html>
