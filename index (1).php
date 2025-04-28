<?php


    $servername = "localhost";
    $username = "username";
    $password = "pass";
    $database = "dbname";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(isset($_POST['submit'])) 
    {
        $Id=$_POST['id'];
        $Pwd=$_POST['password'];
        $sql1= "SELECT * FROM `BSc_CS_1st_Year` where ID='$Id' and DOB='$Pwd'";
        $result1 = mysqli_query($conn,$sql1);

        $sql2= "SELECT * FROM `BCA_1st_Year` where ID='$Id' and DOB='$Pwd'";
        $result2 = mysqli_query($conn,$sql2);
        
        $sql3= "SELECT * FROM `BBA_1st_Year` where ID='$Id' and DOB='$Pwd'";
        $result3 = mysqli_query($conn,$sql3);
        
        $sql4= "SELECT * FROM `BSc_CS_2nd_Year` where ID='$Id' and DOB='$Pwd'";
        $result4 = mysqli_query($conn,$sql4);
        
        $sql6= "SELECT * FROM `BBA_2nd_Year` where ID='$Id' and DOB='$Pwd'";
        $result6 = mysqli_query($conn,$sql6);
        
        $sql5= "SELECT * FROM `BCA_2nd_Year` where ID='$Id' and DOB='$Pwd'";
        $result5 = mysqli_query($conn,$sql5);
        
        $sql7= "SELECT * FROM `BSc_CS_3rd_Year` where ID='$Id' and DOB='$Pwd'";
        $result7 = mysqli_query($conn,$sql7);
        
        $sql8= "SELECT * FROM `BCA_3rd_Year` where ID='$Id' and DOB='$Pwd'";
        $result8 = mysqli_query($conn,$sql8);
        
        $sql9= "SELECT * FROM `BBA_3rd_Year` where ID='$Id' and DOB='$Pwd'";
        $result9 = mysqli_query($conn,$sql9);
        
        
          if(mysqli_fetch_array($result1)>0)
          {
                header("Location: userdetails.php?id=" . urlencode($Id));
          }
          else if(mysqli_fetch_array($result2)>0)
          {
                header("Location: userdetails.php?id=" . urlencode($Id));
          }
          else if(mysqli_fetch_array($result3)>0)
          {
                header("Location: userdetails.php?id=" . urlencode($Id));
          }
            else if(mysqli_fetch_array($result4)>0)
           {
                header("Location: userdetails.php?id=" . urlencode($Id));
           }
          else if(mysqli_fetch_array($result5)>0)
          {
                header("Location: userdetails.php?id=" . urlencode($Id));
          }
          else if(mysqli_fetch_array($result6)>0)
          {
                header("Location: userdetails.php?id=" . urlencode($Id));
          }
          else if(mysqli_fetch_array($result7)>0)
          {
                header("Location: userdetails.php?id=" . urlencode($Id));
          }
          else if(mysqli_fetch_array($result8)>0)
          {
                header("Location: userdetails.php?id=" . urlencode($Id));
          }
          else if(mysqli_fetch_array($result9)>0)
          {
                header("Location: userdetails.php?id=" . urlencode($Id));
          }
          else
          {
            echo "<script>alert('Not Found');</script>";
          }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,500&display=swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'DM Sans', sans-serif;
        }
        body{
            height: 120vh;
            width: 100%;
            object-fit: cover;
            background: url(./result\ page.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container{
            width: 24%;
            min-width: 250px;
            height: 80vh;
            background-color: #ffffff;
            position: absolute;
            top: 50%;
            left: 75%;
            transform: translate(-50%, -50%);
            border-radius: 20px;
            padding: 16px;
            border: 3px solid #85219C;
            box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.2);
        }

        .img-cont{
            width: 100px;
            margin: auto;
            margin-top: 20px;
        }

        .form-logo{
            width: 100%;
            object-fit: cover;
        }

        #res-z{
            display: none;
            font-size: 50px;
            color: #85219C;
        }

        h2{
            margin-top: 10px;
            font-size: 25px;
            text-align: center;
            letter-spacing: 2px;
        }

        .login-form{
            width: 80%;
            margin: 12px auto;
            /* border: 2px solid black; */
            padding: 10px;
        }

        .login-form h3{
            font-size: 22px;
            margin: 10px 0 20px;
        }

        .login-form input{
            width: 100%;
            margin-top: 3px;
            margin-bottom: 20px;
            font-size: 20px;
            padding: 8px 5px;
            outline: none;
            border: 1px solid black;
            border-radius: 5px;
            height:27px;
        }

        .login-form input:focus{
            outline: none;
            border: 2px solid #85219C;
            font-size: 20px;
        }

        .login-form label{
            font-size: 20px;
        }

       #login{
            margin: 10px auto;
            padding: 8px auto;
            border: none;
            height:45px;
            background-color: #85219C;
            color: #ffffff;
            font-size: 20px;
            transition: all ease-in-out 0.2s;
        }
         
          #login:hover{
            background-color: #fff;
            color: #85219C;
            font-size: 17px;
            font-weight: bold;
            border: 2px solid #85219C;
        }

        @media screen and (max-width:800px) {
            body{
                background: none;
                height: auto;
            }
            .container{
                width: 70%;
                min-width: 170px;
                min-height: 70vh;
                position: static;
                transform: none;
                margin: 60px auto;
            }
            #res-z{
                display: block;
            }
        }

        @media screen and (max-width:600px) {

            .container{
                width: 90%;
                min-width: 200px;
                min-height: 80vh;
                position: static;
                transform: none;
                margin: none;
            }

            .login-form h3{
                font-size: 22px;
                margin: 10px 0 20px;
                text-align: center;
            }
        }

        @media screen and (max-width:355px) {
            #res-z{
                font-size: 20px;
            }

            h2{
                margin-top: 20px;
                font-size: 100px;
            }
            
        }
    </style>

</head>
<body>
     <div class="container">
        <div class="img-cont">
            <img class="form-logo" src="./creativelogo.png" alt="">
        </div>
        <h2 id="res-z">RESULT ZONE</h2>
        <h2>Student's Login</h2>
        <form class="login-form" action="" method="post">
            <label for="clg-id">College ID:</label>
            <input type="text" name="id" id="clg-id">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <input id="login" type="submit" name="submit" value="Login">
        </form>
        
        <h2 style="color:red;" onclick="admin()">Admin</h2>
    </div>
    <script>
        function admin(){
            window.location.assign('https://creativecollege.in/Result/login.php');
        }
    </script>
</body>
</html>

