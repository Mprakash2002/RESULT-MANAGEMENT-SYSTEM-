   
<?php
// include "connection.php";
$showError = false;

 if(isset($_POST["name"]))
 {
  $user = $_POST["name"];
  $pass = $_POST["pass"];
  
  

  

  if($user == "pass" & $pass == "passsss")
  {
      
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['name'] = $user;
      echo "<script>window.top.location='https://creativecollege.in/Result/bscbcabba.html'</script>";
   
      $login = true;
     
    
  }
  else{
    $showError = true;
  }

 }
?>   
<!DOCTYPE html>
<html lang="en">
<head>                                                    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Log in </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="login.css">

    <script src="https://kit.fontawesome.com/3a3e121ecf.js" crossorigin="anonymous"></script>

</head>
<body>
  <?php
  if ($login)
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

if($showError){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failed!</strong> You are not logged in. Wrong username and password.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
  

 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- <a class="navbar-brand" href="#">Hidden brand</a> -->
            <img src="logo.jpg" height="60px" width="100px" alt="" class="navbar-brand img1">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="https://creativecollege.in/E-library/index.html">Back</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">
        <h1 id="h"> ADMIN LOGIN </h1>
        </div>
        
        <!--Waves Container-->
        <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
        </svg>
        </div>
        
        </div>
        

<div class="signup-box">

<img src="CTC LOGO2.png" >

<form action="#" name="suForm" id="supform" method="POST">
    <input type="text" placeholder="User name" id="name" name="name" onclick="resetBtn()" maxlength="30">
    <input type="password" name="pass" autocomplete="current-password" required="" placeholder="Password" id="pass" onclick="resetBtn()" minlength="8">
    <input type="checkbox" id="c1" name="c1"  onclick="showpass()" style="margin-top: 15px; margin-left: 30px;">
    <label for="c1" >&nbsp Show Password</label> 
    

    <button type="submit" id="submit-btn" onmouseover="mouseOver()" >Log in</button>
</form>
</div>






<script>

    var a = 0;
    function showpass()
    {
        var x= document.getElementById("pass");
        if(x.type ==="password")
        {
            x.type ="text";
        }
        else
        {
            x.type="password";
        }

    }

    function mouseOver(){
        
        const name = document.forms['suForm']['name'].value;
       
        const pass = document.forms['suForm']['pass'].value;
 
         if((name == ""  || pass == "") && a==0){
        buttonMoveLeft();
        a = 1;
        return false;
        } 

         if((name == "" || pass == "" ) && a==1){
        buttonMoveRight();
        a = 2;
        return false;
        } 

         if((name == "" || pass == "" ) && a==2){
        buttonMoveLeft();
        a = 1;
        return false;
        } 

        else
        {

            // document.getElementById('submit-btn').click();  
            document.getElementById('submit-btn').style.cursor = "pointer";
            return false;
        } ;

    };


    

    function buttonMoveLeft(){

        const button = document.getElementById('submit-btn');
        button.style.transform = 'translateX(-200%)';

    };


    function buttonMoveRight(){

        const button = document.getElementById('submit-btn');
        button.style.transform = 'translateX(0%)';

    };


    function resetBtn(){
        const button = document.getElementById('submit-btn');
        button.style.transform = 'translateX(-100%)';
    };


</script>

</body>
</html>
