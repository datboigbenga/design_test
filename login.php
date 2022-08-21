<?php session_start(); ?>
<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img\favicon.png" />
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link href="./fs/css/all.css" rel="stylesheet"> -->
    <title>Government Grants Application Registration Form | GovernmentGrants.us</title>
    <style media="screen">
        /* body{
            background: url()
        } */
      @media (max-width: 768px) {
        .logo{
        display: none;
        }

      }
      .proceed{
        background: #1b3f85;
        color:white;
        margin-bottom:15px;
      }
      .proceed:hover{
        background:#aeb8d5;
        color: grey;
      }
    </style>
  </head>
  <body>


  <div class="modaly" id="myModal">
    <div class="modaly-content2">
      <div>
        <img src="img\gov-grants-logo.jpg" style="width:79%;height:auto"/>
      </div>
      <div class="acceptance">
        <hr>
        <p style="color:#46699d;margin-top:20px">Login</p>
      <!-- </br> -->
        <hr style="border:1px dashed #053375">
      </br>
    

      <?php 
  if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $encrypted_pass = md5($pass);

    if(empty($email) || empty($pass)){
        echo "Please input fields below!";
    }
    else{
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
        $emailErr = "Invalid email format";  
    }  
    else{
   $sql = "SELECT id, fname, lname FROM users WHERE email = '$email' AND password = '$encrypted_pass'";
   $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result)>0){
    //  while(
       $row = mysqli_fetch_assoc($result);
      //  ){
         $_SESSION['id'] = $row['id'];
         $_SESSION['fname'] = $row['fname'];
         $_SESSION['lname'] = $row['lname'];

         echo $row['lname'];
         header("location: index.php");
    }
     else{
        echo "<span class='errors'>User does not exit</span>";
     }
    }
    }
  }
       ?>
   
   
      <form action="" method="post">
      <label for="">email:</label>
      <input type="text" placeholder="....@yourmail.com" name="email" style="margin-bottom:15px">

      <label for="">password:</label>
      <input type="password" placeholder="*************" name="pass" style="margin-bottom:25px">
      <input type="submit" value="proceed" name="submit" class="proceed">
      </form>
      <p style="text-align: right;font-size:13px"><a>Forgot password</a></p>
  <p style="text-align: center;font-size:13px">Do not have aan account? <a href="apply">Register</a></p>
  
  

      </div>
    </div>
  </div>
  <main>
   
  </main>


  <!-- <footer class="footy">
        <section class="foot_menu3">
          <div class="container">
            <p id="foor">
              Government
 Grants is not a government agency and is not affiliated with the United
 States Government or any other funding agency. Government Grants
supplies training materials on how to apply for funding as well as
resources on where to apply.
            </p>
            <p id="foor">© Government Grants.us Copyright 2020</p>
          </div>
        </section>

  </footer> -->
  <script src="https://kit.fontawesome.com/0a6e3c7212.js" crossorigin="anonymous"></script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/628f682f7b967b1179915cd5/1g402u0rl';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script type="text/javascript" src="js/script2.js"></script>

  </body>
  </html>
