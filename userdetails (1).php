<?php

    $servername = "localhost";
    $username = "user";
    $password = "password";
    $database = "cdbt";

    $conn = mysqli_connect($servername, $username, $password, $database);
    $Id= $_GET["id"];
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
        $sql1= "SELECT * FROM `BSc_CS_1st_Year` where ID='$Id'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_assoc($result1);
    
        $sql2= "SELECT * FROM `BCA_1st_Year` where ID='$Id'";
        $result2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
    
        $sql3= "SELECT * FROM `BBA_1st_Year` where ID='$Id'";
        $result3 = mysqli_query($conn,$sql3);
        $row3 = mysqli_fetch_assoc($result3);
        
        $sql4= "SELECT * FROM `BSc_CS_2nd_Year` where ID='$Id'";
        $result4 = mysqli_query($conn,$sql4);
        $row4 = mysqli_fetch_assoc($result4);
    
        $sql5= "SELECT * FROM `BCA_2nd_Year` where ID='$Id'";
        $result5 = mysqli_query($conn,$sql5);
        $row5 = mysqli_fetch_assoc($result5);
    
        $sql6= "SELECT * FROM `BBA_2nd_Year` where ID='$Id'";
        $result6 = mysqli_query($conn,$sql6);
        $row6 = mysqli_fetch_assoc($result6);
    
        $sql7= "SELECT * FROM `BSc_CS_3rd_Year` where ID='$Id'";
        $result7 = mysqli_query($conn,$sql7);
        $row7 = mysqli_fetch_assoc($result7);
    
        $sql8= "SELECT * FROM `BCA_3rd_Year` where ID='$Id'";
        $result8 = mysqli_query($conn,$sql8);
        $row8 = mysqli_fetch_assoc($result8);
    
        $sql9= "SELECT * FROM `BBA_3rd_Year` where ID='$Id'";
        $result9 = mysqli_query($conn,$sql9);
        $row9 = mysqli_fetch_assoc($result9);


        if ($row1>0) 
        {
            $id=$row1["ID"];
            $name=$row1["NAME"];
            $dob=$row1["DOB"];
            $batch=$row1["BATCH"];
            $course=$row1["COURSE"];
            $semester=$row1["SEMESTER"];
            echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Student Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    border: 8px solid rgb(26, 63, 229);
                    border-radius: 20px;
                    padding: 20px;
                    margin: 20px auto;
                    max-width: 830px;
                    background-color: rgba(255, 255, 255, 0.95);
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                }
        
                .header {
                    text-align: center;
                    color: red;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
        
                .heading {
                    color: blue;
                    font-size: 20px;
                }
        
                .content {
                    font-size: 18px;
                    margin-left: 10px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1 class='header'>Student Details</h1>
                <div>
                    <h2 class='heading'>Student ID:  $id</h2>
                    
                    <h2 class='heading'>Name:  $name</h2>
                    
                    <h2 class='heading'>Course:  $course</h2>
                    
                    <h2 class='heading'>Semester:  $semester</h2>
                 
                </div>
            </div>
        </body>
        </html>
        ";
        }
        else if($row2>0) 
        {
            $id=$row2["ID"];
            $name=$row2["NAME"];
            $dob=$row2["DOB"];
            $batch=$row2["BATCH"];
            $course=$row2["COURSE"];
            $semester=$row2["SEMESTER"];
            echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Student Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    border: 8px solid rgb(26, 63, 229);
                    border-radius: 20px;
                    padding: 20px;
                    margin: 20px auto;
                    max-width: 830px;
                    background-color: rgba(255, 255, 255, 0.95);
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                }
        
                .header {
                    text-align: center;
                    color: red;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
        
                .heading {
                    color: blue;
                    font-size: 20px;
                }
        
                .content {
                    font-size: 18px;
                    margin-left: 10px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1 class='header'>Student Details</h1>
                <div>
                    <h2 class='heading'>Student ID:  $id</h2>
                    
                    <h2 class='heading'>Name:  $name</h2>
                    
                    <h2 class='heading'>Course:  $course</h2>
                    
                    <h2 class='heading'>Semester:  $semester</h2>
                 
                </div>
            </div>
        </body>
        </html>
        ";
        }
        else if($row3>0) 
        {
            $id=$row3["ID"];
            $name=$row3["NAME"];
            $dob=$row3["DOB"];
            $batch=$row3["BATCH"];
            $course=$row3["COURSE"];
            $semester=$row3["SEMESTER"];
            echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Student Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    border: 8px solid rgb(26, 63, 229);
                    border-radius: 20px;
                    padding: 20px;
                    margin: 20px auto;
                    max-width: 830px;
                    background-color: rgba(255, 255, 255, 0.95);
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                }
        
                .header {
                    text-align: center;
                    color: red;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
        
                .heading {
                    color: blue;
                    font-size: 20px;
                }
        
                .content {
                    font-size: 18px;
                    margin-left: 10px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1 class='header'>Student Details</h1>
                <div>
                    <h2 class='heading'>Student ID:  $id</h2>
                    
                    <h2 class='heading'>Name:  $name</h2>
                    
                    <h2 class='heading'>Course:  $course</h2>
                    
                    <h2 class='heading'>Semester:  $semester</h2>
                 
                </div>
            </div>
        </body>
        </html>
        ";
         }
         else if($row4>0) 
        {
            $id=$row4["ID"];
            $name=$row4["NAME"];
            $dob=$row4["DOB"];
            $batch=$row4["BATCH"];
            $course=$row4["COURSE"];
            $semester=$row4["SEMESTER"];
            echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Student Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    border: 8px solid rgb(26, 63, 229);
                    border-radius: 20px;
                    padding: 20px;
                    margin: 20px auto;
                    max-width: 830px;
                    background-color: rgba(255, 255, 255, 0.95);
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                }
        
                .header {
                    text-align: center;
                    color: red;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
        
                .heading {
                    color: blue;
                    font-size: 20px;
                }
        
                .content {
                    font-size: 18px;
                    margin-left: 10px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1 class='header'>Student Details</h1>
                <div>
                    <h2 class='heading'>Student ID:  $id</h2>
                    
                    <h2 class='heading'>Name:  $name</h2>
                    
                    <h2 class='heading'>Course:  $course</h2>
                    
                    <h2 class='heading'>Semester:  $semester</h2>
                 
                </div>
            </div>
        </body>
        </html>
        ";
        }
        else if($row5>0) 
        {   
            $id=$row5["ID"];
            $name=$row5["NAME"];
            $dob=$row5["DOB"];
            $batch=$row5["BATCH"];
            $course=$row5["COURSE"];
            $semester=$row5["SEMESTER"];
            echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Student Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    border: 8px solid rgb(26, 63, 229);
                    border-radius: 20px;
                    padding: 20px;
                    margin: 20px auto;
                    max-width: 830px;
                    background-color: rgba(255, 255, 255, 0.95);
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                }
        
                .header {
                    text-align: center;
                    color: red;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
        
                .heading {
                    color: blue;
                    font-size: 20px;
                }
        
                .content {
                    font-size: 18px;
                    margin-left: 10px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1 class='header'>Student Details</h1>
                <div>
                    <h2 class='heading'>Student ID:  $id</h2>
                    
                    <h2 class='heading'>Name:  $name</h2>
                    
                    <h2 class='heading'>Course:  $course</h2>
                    
                    <h2 class='heading'>Semester:  $semester</h2>
                 
                </div>
            </div>
        </body>
        </html>
        ";
        }
        else if($row6>0) 
        {
            $id=$row6["ID"];
            $name=$row6["NAME"];
            $dob=$row6["DOB"];
            $batch=$row6["BATCH"];
            $course=$row6["COURSE"];
            $semester=$row6["SEMESTER"];
            echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Student Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    border: 8px solid rgb(26, 63, 229);
                    border-radius: 20px;
                    padding: 20px;
                    margin: 20px auto;
                    max-width: 830px;
                    background-color: rgba(255, 255, 255, 0.95);
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                }
        
                .header {
                    text-align: center;
                    color: red;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
        
                .heading {
                    color: blue;
                    font-size: 20px;
                }
        
                .content {
                    font-size: 18px;
                    margin-left: 10px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1 class='header'>Student Details</h1>
                <div>
                    <h2 class='heading'>Student ID:  $id</h2>
                    
                    <h2 class='heading'>Name:  $name</h2>
                    
                    <h2 class='heading'>Course:  $course</h2>
                    
                    <h2 class='heading'>Semester:  $semester</h2>
                 
                </div>
            </div>
        </body>
        </html>
        ";
        }
        else if($row7>0) 
        {
           $id=$row7["ID"];
            $name=$row7["NAME"];
            $dob=$row7["DOB"];
            $batch=$row7["BATCH"];
            $course=$row7["COURSE"];
            $semester=$row7["SEMESTER"];
            echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Student Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    border: 8px solid rgb(26, 63, 229);
                    border-radius: 20px;
                    padding: 20px;
                    margin: 20px auto;
                    max-width: 830px;
                    background-color: rgba(255, 255, 255, 0.95);
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                }
        
                .header {
                    text-align: center;
                    color: red;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
        
                .heading {
                    color: blue;
                    font-size: 20px;
                }
        
                .content {
                    font-size: 18px;
                    margin-left: 10px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1 class='header'>Student Details</h1>
                <div>
                    <h2 class='heading'>Student ID:  $id</h2>
                    
                    <h2 class='heading'>Name:  $name</h2>
                    
                    <h2 class='heading'>Course:  $course</h2>
                    
                    <h2 class='heading'>Semester:  $semester</h2>
                 
                </div>
            </div>
        </body>
        </html>
        ";
        }
        else if($row8>0) 
        {
            $id=$row8["ID"];
            $name=$row8["NAME"];
            $dob=$row8["DOB"];
            $batch=$row8["BATCH"];
            $course=$row8["COURSE"];
            $semester=$row8["SEMESTER"];
          echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Student Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    border: 8px solid rgb(26, 63, 229);
                    border-radius: 20px;
                    padding: 20px;
                    margin: 20px auto;
                    max-width: 830px;
                    background-color: rgba(255, 255, 255, 0.95);
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                }
        
                .header {
                    text-align: center;
                    color: red;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
        
                .heading {
                    color: blue;
                    font-size: 20px;
                }
        
                .content {
                    font-size: 18px;
                    margin-left: 10px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1 class='header'>Student Details</h1>
                <div>
                    <h2 class='heading'>Student ID:  $id</h2>
                    
                    <h2 class='heading'>Name:  $name</h2>
                    
                    <h2 class='heading'>Course:  $course</h2>
                    
                    <h2 class='heading'>Semester:  $semester</h2>
                 
                </div>
            </div>
        </body>
        </html>
        ";
        }
        else if($row9>0) 
        {
            $id=$row9["ID"];
            $name=$row9["NAME"];
            $dob=$row9["DOB"];
            $batch=$row9["BATCH"];
            $course=$row9["COURSE"];
            $semester=$row9["SEMESTER"];
            echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Student Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    border: 8px solid rgb(26, 63, 229);
                    border-radius: 20px;
                    padding: 20px;
                    margin: 20px auto;
                    max-width: 830px;
                    background-color: rgba(255, 255, 255, 0.95);
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                }
        
                .header {
                    text-align: center;
                    color: red;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
        
                .heading {
                    color: blue;
                    font-size: 20px;
                }
        
                .content {
                    font-size: 18px;
                    margin-left: 10px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1 class='header'>Student Details</h1>
                <div>
                    <h2 class='heading'>Student ID:  $id</h2>
                    
                    <h2 class='heading'>Name:  $name</h2>
                    
                    <h2 class='heading'>Course:  $course</h2>
                    
                    <h2 class='heading'>Semester:  $semester</h2>
                 
                </div>
            </div>
        </body>
        </html>
        ";
        }
    
    mysqli_close($conn);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .button-container {
            display: flex;
            justify-content: space-between; /* Arrange buttons side by side with space between */
            margin: 20px auto;
            max-width: 800px;
            padding: 10px; /* Add some padding for better spacing on smaller screens */
        }

        form {
            flex: 0 1 calc(48% - 10px); /* Adjust width for side-by-side layout with spacing */
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 10px;
            margin: 10px 0; /* Add some spacing between forms */
        }

        button {
            background-color: rgb(26, 63, 229);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <form method='post'>
            <input type="hidden" name="Unit_1" value="true">
            <button type="submit">UNITTEST-1</button>
        </form>

        <form method='post'>
            <input type="hidden" name="Unit_2" value="true">
            <button type="submit">UNITTEST-2</button>
        </form>
    </div>
    <div class="button-container">
        <form method='post'>
            <input type="hidden" name="Internal_1" value="true">
            <button type="submit">INTERNAL-1</button>
        </form>

        <form method='post'>
            <input type="hidden" name="Internal_2" value="true">
            <button type="submit">INTERNAL-2</button>
        </form>
    </div>



    
    <?php
    
            //UNITTEST 1
          if (isset($_POST['Unit_1']) && $_POST['Unit_1'] === 'true') 
          {
             //BSC-CS(H) 
             if($course=="BSC-CS(H)" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_1st_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["id"];
                    $c=$row1["c"];
                    $dl=$row1["dl"];
                    $math=$row1["math"];
                    $evs=$row1["evs"];
                    $type=$row1["type"];
                    $total=$c+$dl+$math+$evs;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Result</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                        }
                
                        .result-container {
                            padding: 10px;
                            border: 7px solid rgb(26, 63, 229);
                            margin: 30px;
                            border-radius: 30px;
                            font-size: 30px;
                            text-align: center;
                        }
                
                        .result-container h1 {
                            color: red;
                        }
                
                        hr {
                            height: 4px;
                            background-color: blue;
                            border: none;
                        }
                
                        table {
                            font-size: 24px;
                            margin-top: 20px;
                            border-collapse: collapse;
                            width: 100%;
                        }
                
                        table, th, td {
                            border: 2px solid blue;
                        }
                
                        th, td {
                            padding: 10px;
                            text-align: center;
                        }
                
                        .total-percentage {
                            text-align: center;
                            margin-top: 10px;
                        }
                
                        @media (max-width: 768px) {
                            .result-container {
                                font-size: 20px;
                            }
                
                            table {
                                font-size: 18px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='result-container'>
                        <h1>RESULT</h1>
                        <hr>
                        
                        <table>
                            <tr>
                                <th>SUBJECT</th>
                                <th>SECURE MARK</th>
                            </tr>
                            <tr>
                                <td>C Programming</td>
                                <td>$c</td>
                            </tr>
                            <tr>
                                <td>Digital Logic</td>
                                <td>$dl</td>
                            </tr>
                            <tr>
                                <td>Mathematics</td>
                                <td>$math</td>
                            </tr>
                            <tr>
                                <td>Environmental Science</td>
                                <td>$evs</td>
                            </tr>
                        </table>
                        <div class='total-percentage'>
                            <h3>Total=$total</h3>
                            <h3>%age=$per</h3>
                        </div>
                    </div>
                </body>
                </html>
                ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             else if($course=="BSC-CS(H)" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_2nd_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $Eng=$row1["Eng"];
                    $Ds=$row1["Ds"];
                    $Cpp=$row1["Cpp"];
                    $Physics=$row1["Physics"];
                    $type=$row1["type"];
                    $total=$Cpp+$Ds+$Eng+$Physics;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 24px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td>$Eng</td>
                                </tr>
                                <tr>
                                    <td>CPP Programming</td>
                                    <td>$Cpp</td>
                                </tr>
                                <tr>
                                    <td>Data Structure</td>
                                    <td>$Ds</td>
                                </tr>
                                <tr>
                                    <td>Physics</td>
                                    <td>$Physics</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total=$total</h3>
                                <h3>%age=$per%</h3>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";   
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             else if($course=="BSC-CS(H)" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_3rd_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $java=$row1["Java"];
                    $dbs=$row1["Dbs"];
                    $dms=$row1["Dms"];
                    $python=$row1["Python"];
                    $algaebra=$row1["Algaebra"];
                    $total=$java+$dbs+$dms+$algaebra+$python;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <h3>EXAM TYPE : UNIT TEST-2</h3>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Java Programming</td>
                                        <td>$java</td>
                                    </tr>
                                    <tr>
                                        <td>Database System</td>
                                        <td>$dbs</td>
                                    </tr>
                                    <tr>
                                        <td>Discrete Mathematics</td>
                                        <td>$dms</td>
                                    </tr>
                                    <tr>
                                        <td>Python</td>
                                        <td>$python</td>
                                    </tr>
                                    <tr>
                                        <td>Algebra</td>
                                        <td>$algaebra</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total></h3>
                                    <h3>%age=$per</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             else if($course=="BSC-CS(H)" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_4th_sem_1st_unittest` where Id='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $os=$row1["Os"];
                    $cn=$row1["Cn"];
                    $Cg=$row1["Cg"];
                    $Physics=$row1["Physics"];
                    $Android=$row1["Android"];
                    $total=$os+$cn+$Cg+$Physics+$Android;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Operating System</td>
                                        <td>$os</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Network</td>
                                        <td>$cn</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Graphics</td>
                                        <td>$Cg</td>
                                    </tr>
                                    <tr>
                                        <td>Android</td>
                                        <td>$Android</td>
                                    </tr>
                                    <tr>
                                        <td>Physics</td>
                                        <td>$Physics</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             else if($course=="BSC-CS(H)" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_5th_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $Wt=$row1["Wt"];
                    $Se=$row1["Se"];
                    $Nt=$row1["Nt"];
                    $Unix=$row1["Unix"];
                    $type=$row1["type"];
                    $total=$Unix+$Nt+$Se+$Wt;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 24px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            <h3>EXAM TYPE : UNIT TEST-1</h3>
                            <hr>
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>Web Technology</td>
                                    <td>$Wt</td>
                                </tr>
                                <tr>
                                    <td>Software Engineering</td>
                                    <td>$Se</td>
                                </tr>
                                <tr>
                                    <td>numeric Technique</td>
                                    <td> $Nt</td>
                                </tr>
                                <tr>
                                    <td>Unix shell Programming</td>
                                    <td>$Unix</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total= $total</h3>
                                <h3>%age= $per</h3>
                            </div>
                        </div>
                    </body>
                    </html>";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             else if($course=="BSC-CS(H)" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_6th_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                $per=0;
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $ai=$row1["Ai"];
                    $adt=$row1["Adt"];
                    $dsc=$row1["Dsc"];
                    $type=$row1["type"];
                    $total=$ai+$adt+$dsc;
                    $per=(($total/60)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 42px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Artificial Intelligence</td>
                                        <td>$ai</td>
                                    </tr>
                                    <tr>
                                        <td>Algorithm Design Tq</td>
                                        <td>$adt</td>
                                    </tr>
                                    <tr>
                                        <td>Data Science</td>
                                        <td>$dsc</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             //BCA
             
             else if($course=="BCA" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_1st_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $c=$row1["C"];
                    $dl=$row1["Dl"];
                    $mgmt=$row1["Management"];
                    $evs=$row1["Evs"];
                    $total=$c+$dl+$mgmt+$evs;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                              
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Environmental Science</td>
                                        <td>$evs</td>
                                    </tr>
                                    <tr>
                                        <td>Digital Logic</td>
                                        <td>$dl</td>
                                    </tr>
                                    <tr>
                                        <td>C Programming</td>
                                        <td>$c</td>
                                    </tr>
                                    <tr>
                                        <td>Management</td>
                                        <td>$mgmt</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             else if($course=="BCA" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_2nd_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $cpp=$row1["Cpp"];
                    $ds=$row1["Ds"];
                    $eng=$row1["English"];
                    $statistics=$row1["Statistics"];
                    $type=$row1["type"];
                    $total=$cpp+$ds+$eng+$statistics;
                    $per=(($total/80)*100);
                    $grade=null;
                     echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>English</td>
                                        <td>$eng</td>
                                    </tr>
                                    <tr>
                                        <td>C++ Programming</td>
                                        <td>$cpp</td>
                                    </tr>
                                    <tr>
                                        <td>Data Structure</td>
                                        <td>$ds</td>
                                    </tr>
                                    <tr>
                                        <td>Statistics</td>
                                        <td>$statistics</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             else if($course=="BCA" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_3rd_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $co=$row1["Co"];
                    $java=$row1["Java"];
                    $dms=$row1["Dms"];
                    $acc=$row1["B_Accounting"];
                    $python=$row1["Python"];
                    $total=$co+$java+$dms+$acc+$python;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Computer Organization</td>
                                        <td>$co</td>
                                    </tr>
                                    <tr>
                                        <td>Java Programming</td>
                                        <td>$java</td>
                                    </tr>
                                    <tr>
                                        <td>Discrete Mathematical St</td>
                                        <td>$dms</td>
                                    </tr>
                                    <tr>
                                        <td>Business Accounting</td>
                                        <td>$acc</td>
                                    </tr>
                                    <tr>
                                        <td>Python Programming</td>
                                        <td>$python</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             else if($course=="BCA" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_4th_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $os=$row1["Os"];
                    $cn=$row1["Cn"];
                    $dbs=$row1["Dbs"];
                    $android=$row1["Android"];
                    $eco=$row1["B_Economics"];
                    $total=$os+$cn+$dbs+$eco+$android;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Operating System</td>
                                        <td>$os</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Network</td>
                                        <td>$cn</td>
                                    </tr>
                                    <tr>
                                        <td>Database System</td>
                                        <td>$dbs</td>
                                    </tr>
                                    <tr>
                                        <td>Android</td>
                                        <td>$android</td>
                                    </tr>
                                    <tr>
                                        <td>Business Economics</td>
                                        <td>$eco</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             else if($course=="BCA" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_5th_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $wt=$row1["Wt"];
                    $se=$row1["Se"];
                    $unix=$row1["Unix"];
                    $dm=$row1["Data_Mining"];
                    $total=$wt+$se+$unix+$dm;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Web Technology</td>
                                        <td>$wt</td>
                                    </tr>
                                    <tr>
                                        <td>Software Engineering</td>
                                        <td>$se</td>
                                    </tr>
                                    <tr>
                                        <td>Unix Shell Programming</td>
                                        <td>$unix</td>
                                    </tr>
                                    <tr>
                                        <td>Data Mining</td>
                                        <td>$dm</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             
            else if($course=="BCA" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_6th_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $cg=$row1["Cg"];
                    $nt=$row1["Nt"];
                    $dsc=$row1["Dsc"];
                    $total=$cg+$nt+$dsc;
                    $per=(($total/60)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 28px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>Computer Graphics</td>
                                    <td>$cg</td>
                                </tr>
                                <tr>
                                    <td>Numeric Technique</td>
                                    <td>$nt</td>
                                </tr>
                                <tr>
                                    <td>Data Science</td>
                                    <td>$dsc</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total=$total</h3>
                                <h3>%age=$per%</h3>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             
             //BBA
             
            else if($course=="BBA" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_1st_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Ib=$row1["Ib"];
                    $Ell=$row1["Ell"];
                    $Qtm=$row1["Qtm"];
                    $Bfa=$row1["Bfa"];
                    $total=$Ib+$Ell+$Qtm+$Bfa;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Introduction to Business</td>
                                        <td>$Ib</td>
                                    </tr>
                                    <tr>
                                        <td>English Language and Literature</td>
                                        <td>$Ell</td>
                                    </tr>
                                    <tr>
                                        <td>Quantitative Techniques for Management</td>
                                        <td>$Qtm</td>
                                    </tr>
                                    <tr>
                                        <td>Basic Financial Accounting</td>
                                        <td>$Bfa</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
            else if($course=="BBA" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_2nd_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $eco=$row1["Eco"];
                    $mtp=$row1["Mtp"];
                    $Cma=$row1["Cma"];
                    $cm=$row1["Cm"];
                    $total=$eco+$mtp+$Cma+$cm;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Economics</td>
                                        <td>$eco</td>
                                    </tr>
                                    <tr>
                                        <td>Management Theory and Practices</td>
                                        <td>$mtp</td>
                                    </tr>
                                    <tr>
                                        <td>Cost and Management Accounting</td>
                                        <td>$Cma</td>
                                    </tr>
                                    <tr>
                                        <td>Computer for Management</td>
                                        <td>$cm</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
            else if($course=="BBA" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_3rd_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Pm=$row1["Pm"];
                    $Becg=$row1["Becg"];
                    $Ibi=$row1["Ibi"];
                    $Bcl=$row1["Bcl"];
                    $Ce=$row1["Ce"];
                    $total=$Pm+$Becg+$Ibi+$Bcl+$Ce;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Result</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                    }
            
                    .result-container {
                        padding: 10px;
                        border: 7px solid rgb(26, 63, 229);
                        margin: 30px;
                        border-radius: 30px;
                        font-size: 30px;
                        text-align: center;
                    }
            
                    .result-container h1 {
                        color: red;
                    }
            
                    hr {
                        height: 4px;
                        background-color: blue;
                        border: none;
                    }
            
                    table {
                        font-size: 28px;
                        margin-top: 20px;
                        border-collapse: collapse;
                        width: 100%;
                    }
            
                    table, th, td {
                        border: 2px solid blue;
                    }
            
                    th, td {
                        padding: 10px;
                        text-align: center;
                    }
            
                    .total-percentage {
                        text-align: center;
                        margin-top: 10px;
                    }
            
                    @media (max-width: 768px) {
                        .result-container {
                            font-size: 20px;
                        }
            
                        table {
                            font-size: 18px;
                        }
                    }
                </style>
            </head>
            <body>
                <div class='result-container'>
                    <h1>RESULT</h1>
                    <hr>
                    <table>
                        <tr>
                            <th>SUBJECT</th>
                            <th>SECURE MARK</th>
                        </tr>
                        <tr>
                            <td>Psychology for Management</td>
                            <td>$Pm</td>
                        </tr>
                        <tr>
                            <td>Business Ethics and Corporate Governance</td>
                            <td>$Becg</td>
                        </tr>
                        <tr>
                            <td>Introduction to Banking and Insurance</td>
                            <td>$Ibi</td>
                        </tr>
                        <tr>
                            <td>Business and Corporate Law</td>
                            <td>$Bcl</td>
                        </tr>
                        <tr>
                            <td>Communicative English</td>
                            <td>$Ce</td>
                        </tr>
                    </table>
                    <div class='total-percentage'>
                        <h3 >Total=$total</h3>
                        <h3 >%age=$per%</h3>
                    </div>
                </div>
            </body>
            </html>
            ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
            else if($course=="BBA" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_4th_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Fm=$row1["Fm"];
                    $Mm=$row1["Mm"];
                    $Hrm=$row1["Hrm"];
                    $Pom=$row1["Pom"];
                    $Es=$row1["Es"];
                    $total=$Fm+$Mm+$dbs+$Hrm+$Pom+$Es;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Financial Management</td>
                                        <td>$Fm</td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Management</td>
                                        <td>$Mm</td>
                                    </tr>
                                    <tr>
                                        <td>Human Resource Management</td>
                                        <td>$Hrm</td>
                                    </tr>
                                    <tr>
                                        <td>Production and Operation Management</td>
                                        <td>$Pom</td>
                                    </tr>
                                    <tr>
                                        <td>Environment Studies</td>
                                        <td>$Es</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
            else if($course=="BBA" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_5th_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Ob=$row1["Ob"];
                    $Fmi=$row1["Fmi"];
                    $Asp=$row1["Asp"];
                    $Misd=$row1["Misd"];
                    $Isc=$row1["Isc"];
                    $total=$Ob+$Fmi+$Misd+$Isc+$Asp;
                    $per=(($total/100)*100);
                    echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Result</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                        }
                
                        .result-container {
                            padding: 10px;
                            border: 7px solid rgb(26, 63, 229);
                            margin: 30px;
                            border-radius: 30px;
                            font-size: 30px;
                            text-align: center;
                        }
                
                        .result-container h1 {
                            color: red;
                        }
                
                        hr {
                            height: 4px;
                            background-color: blue;
                            border: none;
                        }
                
                        table {
                            font-size: 28px;
                            margin-top: 20px;
                            border-collapse: collapse;
                            width: 100%;
                        }
                
                        table, th, td {
                            border: 2px solid blue;
                        }
                
                        th, td {
                            padding: 10px;
                            text-align: center;
                        }
                
                        .total-percentage {
                            text-align: center;
                            margin-top: 10px;
                        }
                
                        @media (max-width: 768px) {
                            .result-container {
                                font-size: 20px;
                            }
                
                            table {
                                font-size: 18px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='result-container'>
                        <h1>RESULT</h1>
                        <hr>
                        <table>
                            <tr>
                                <th>SUBJECT</th>
                                <th>SECURE MARK</th>
                            </tr>
                            <tr>
                                <td>Organizational Behavior</td>
                                <td>$Ob</td>
                            </tr>
                            <tr>
                                <td>Financial Markets and Institutions</td>
                                <td>$Fmi</td>
                            </tr>
                            <tr>
                                <td>Advertisement and Sales Promotion</td>
                                <td>$Asp</td>
                            </tr>
                            <tr>
                                <td>Management Information System and DSS</td>
                                <td>$Misd</td>
                            </tr>
                            <tr>
                                <td>Indian Society and Culture</td>
                                <td>$Isc</td>
                            </tr>
                        </table>
                        <div class='total-percentage'>
                            <h3 >Total=$total</h3>
                            <h3 >%age=$per%</h3>
                        </div>
                    </div>
                </body>
                </html>
                  
                ";}
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
            else if($course=="BBA" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_6th_sem_1st_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Rm=$row1["Rm"];
                    $Esbm=$row1["Esbm"];
                    $Ocd=$row1["Ocd"];
                    $Dv=$row1["Dv"];
                    $Ebus=$row1["Ebus"];
                    $total=$Ocd+$Dv+$Ebus+$Rm+$Esbm;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "
                    <!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Research Methodology</td>
                                        <td>$Rm</td>
                                    </tr>
                                    <tr>
                                        <td>Entrepreneurship and Small Business Management</td>
                                        <td>$Esbm</td>
                                    </tr>
                                    <tr>
                                        <td>Organizational Change and Development</td>
                                        <td>$Ocd</td>
                                    </tr>
                                    <tr>
                                        <td>Dissertation and Viva-voce</td>
                                        <td>$Dv</td>
                                    </tr>
                                    <tr>
                                        <td>E-Business</td>
                                        <td>$Ebus</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
            
             
             
            }  
            
            
            //UNITTEST 2
            
            else if (isset($_POST['Unit_2']) && $_POST['Unit_2'] === 'true') 
            {
                //BSC-CS(H)
                
                if($course=="BSC-CS(H)" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_1st_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["id"];
                    $c=$row1["c"];
                    $dl=$row1["dl"];
                    $math=$row1["math"];
                    $evs=$row1["evs"];
                    $type=$row1["type"];
                    $total=$c+$dl+$math+$evs;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <h3>EXAM TYPE : INTERNAL-1</h3>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>C Programming</td>
                                        <td>$c</td>
                                    </tr>
                                    <tr>
                                        <td>Digital Logic</td>
                                        <td>$dl</td>
                                    </tr>
                                    <tr>
                                        <td>Mathematics</td>
                                        <td>$math</td>
                                    </tr>
                                    <tr>
                                        <td>Environmental Science</td>
                                        <td>$evs</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ;";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_2nd_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $Eng=$row1["Eng"];
                    $Ds=$row1["Ds"];
                    $Cpp=$row1["Cpp"];
                    $Physics=$row1["Physics"];
                    $type=$row1["type"];
                    $total=$Cpp+$Ds+$Eng+$Physics;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 24px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td>$Eng</td>
                                </tr>
                                <tr>
                                    <td>CPP Programming</td>
                                    <td>$Cpp</td>
                                </tr>
                                <tr>
                                    <td>Data Structure</td>
                                    <td>$Ds</td>
                                </tr>
                                <tr>
                                    <td>Physics</td>
                                    <td>$Physics</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total=$total</h3>
                                <h3>%age=$per%</h3>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_3rd_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $java=$row1["Java"];
                    $dbs=$row1["Dbs"];
                    $dms=$row1["Dms"];
                    $python=$row1["Python"];
                    $algaebra=$row1["Algaebra"];
                    $total=$java+$dbs+$dms+$algaebra+$python;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Java Programming</td>
                                        <td>$java</td>
                                    </tr>
                                    <tr>
                                        <td>Database System</td>
                                        <td>$dbs</td>
                                    </tr>
                                    <tr>
                                        <td>Discrete Mathematics</td>
                                        <td>$dms</td>
                                    </tr>
                                    <tr>
                                        <td>Python</td>
                                        <td>$python</td>
                                    </tr>
                                    <tr>
                                        <td>Algebra</td>
                                        <td>$algaebra</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total></h3>
                                    <h3>%age=$per</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_4th_sem_2nd_unittest` where Id='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $os=$row1["Os"];
                    $cn=$row1["Cn"];
                    $Cg=$row1["Cg"];
                    $Physics=$row1["Physics"];
                    $Android=$row1["Android"];
                    $type=$row1["type"];
                    $total=$os+$cn+$Cg+$Physics+$Android;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                               
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Operating System</td>
                                        <td>$os</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Network</td>
                                        <td>$cn</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Graphics</td>
                                        <td>$Cg</td>
                                    </tr>
                                    <tr>
                                        <td>Android</td>
                                        <td>$Android</td>
                                    </tr>
                                    <tr>
                                        <td>Physics</td>
                                        <td>$Physics</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_5th_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $Wt=$row1["Wt"];
                    $Se=$row1["Se"];
                    $Nt=$row1["Nt"];
                    $Unix=$row1["Unix"];
                    $type=$row1["type"];
                    $total=$Unix+$Nt+$Se+$Wt;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 24px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            <h3>EXAM TYPE : UNIT TEST-2U/h3>
                            <hr>
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>Web Technology</td>
                                    <td>$Wt</td>
                                </tr>
                                <tr>
                                    <td>Software Engineering</td>
                                    <td>$Se</td>
                                </tr>
                                <tr>
                                    <td>numeric Technique</td>
                                    <td> $Nt</td>
                                </tr>
                                <tr>
                                    <td>Unix shell Programming</td>
                                    <td>$Unix</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total= $total</h3>
                                <h3>%age= $per</h3>
                            </div>
                        </div>
                    </body>
                    </html>";
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_6th_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                $per=0;
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $ai=$row1["Ai"];
                    $adt=$row1["Adt"];
                    $dsc=$row1["Dsc"];
                    $type=$row1["type"];
                    $total=$ai+$adt+$dsc;
                    $per=(($total/60)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 42px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Artificial Intelligence</td>
                                        <td>$ai</td>
                                    </tr>
                                    <tr>
                                        <td>Algorithm Design Tq</td>
                                        <td>$adt</td>
                                    </tr>
                                    <tr>
                                        <td>Data Science</td>
                                        <td>$dsc</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             
             
             //BCA
             
             if($course=="BCA" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_1st_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $c=$row1["C"];
                    $dl=$row1["Dl"];
                    $mgmt=$row1["Management"];
                    $evs=$row1["Evs"];
                    $total=$c+$dl+$mgmt+$evs;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Result</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                        }
                
                        .result-container {
                            padding: 10px;
                            border: 7px solid rgb(26, 63, 229);
                            margin: 30px;
                            border-radius: 30px;
                            font-size: 30px;
                            text-align: center;
                        }
                
                        .result-container h1 {
                            color: red;
                        }
                
                        hr {
                            height: 4px;
                            background-color: blue;
                            border: none;
                        }
                
                        table {
                            font-size: 24px;
                            margin-top: 20px;
                            border-collapse: collapse;
                            width: 100%;
                        }
                
                        table, th, td {
                            border: 2px solid blue;
                        }
                
                        th, td {
                            padding: 10px;
                            text-align: center;
                        }
                
                        .total-percentage {
                            text-align: center;
                            margin-top: 10px;
                        }
                
                        @media (max-width: 768px) {
                            .result-container {
                                font-size: 20px;
                            }
                
                            table {
                                font-size: 18px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='result-container'>
                        <h1>RESULT</h1>
                        <hr>
                        
                        <table>
                            <tr>
                                <th>SUBJECT</th>
                                <th>SECURE MARK</th>
                            </tr>
                            <tr>
                                <td>Environmental Science</td>
                                <td>$evs</td>
                            </tr>
                            <tr>
                                <td>Digital Logic</td>
                                <td>$dl</td>
                            </tr>
                            <tr>
                                <td>C Programming</td>
                                <td>$c</td>
                            </tr>
                            <tr>
                                <td>Management</td>
                                <td>$mgmt</td>
                            </tr>
                        </table>
                        <div class='total-percentage'>
                            <h3 >Total=$total</h3>
                            <h3 >%age=$per%</h3>
                        </div>
                    </div>
                </body>
                </html>
                ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_2nd_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $cpp=$row1["Cpp"];
                    $ds=$row1["Ds"];
                    $eng=$row1["English"];
                    $statistics=$row1["Statistics"];
                    $type=$row1["type"];
                    $total=$cpp+$ds+$eng+$statistics;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>English</td>
                                        <td>$eng</td>
                                    </tr>
                                    <tr>
                                        <td>C++ Programming</td>
                                        <td>$cpp</td>
                                    </tr>
                                    <tr>
                                        <td>Data Structure</td>
                                        <td>$ds</td>
                                    </tr>
                                    <tr>
                                        <td>Statistics</td>
                                        <td>$statistics</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_3rd_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $co=$row1["Co"];
                    $java=$row1["Java"];
                    $dms=$row1["Dms"];
                    $acc=$row1["B_Accounting"];
                    $python=$row1["Python"];
                    $total=$co+$java+$dms+$acc+$python;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Computer Organization</td>
                                        <td>$co</td>
                                    </tr>
                                    <tr>
                                        <td>Java Programming</td>
                                        <td>$java</td>
                                    </tr>
                                    <tr>
                                        <td>Discrete Mathematical St</td>
                                        <td>$dms</td>
                                    </tr>
                                    <tr>
                                        <td>Business Accounting</td>
                                        <td>$acc</td>
                                    </tr>
                                    <tr>
                                        <td>Python Programming</td>
                                        <td>$python</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";   
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_4th_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $os=$row1["Os"];
                    $cn=$row1["Cn"];
                    $dbs=$row1["Dbs"];
                    $android=$row1["Android"];
                    $eco=$row1["B_Economics"];
                    $total=$os+$cn+$dbs+$eco+$android;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Operating System</td>
                                        <td>$os</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Network</td>
                                        <td>$cn</td>
                                    </tr>
                                    <tr>
                                        <td>Database System</td>
                                        <td>$dbs</td>
                                    </tr>
                                    <tr>
                                        <td>Android</td>
                                        <td>$android</td>
                                    </tr>
                                    <tr>
                                        <td>Business Economics</td>
                                        <td>$eco</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_5th_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $wt=$row1["Wt"];
                    $se=$row1["Se"];
                    $unix=$row1["Unix"];
                    $dm=$row1["Data_Mining"];
                    $total=$wt+$se+$unix+$dm;
                    $per=(($total/80)*100);
                    $grade=null;
                     echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Web Technology</td>
                                        <td>$wt</td>
                                    </tr>
                                    <tr>
                                        <td>Software Engineering</td>
                                        <td>$se</td>
                                    </tr>
                                    <tr>
                                        <td>Unix Shell Programming</td>
                                        <td>$unix</td>
                                    </tr>
                                    <tr>
                                        <td>Data Mining</td>
                                        <td>$dm</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_6th_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $cg=$row1["Cg"];
                    $nt=$row1["Nt"];
                    $dsc=$row1["Dsc"];
                    $total=$cg+$nt+$dsc;
                    $per=(($total/60)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 28px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>Computer Graphics</td>
                                    <td>$cg</td>
                                </tr>
                                <tr>
                                    <td>Numeric Technique</td>
                                    <td>$nt</td>
                                </tr>
                                <tr>
                                    <td>Data Science</td>
                                    <td>$dsc</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total=$total</h3>
                                <h3>%age=$per%</h3>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";   
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             
             //BBA
             
             if($course=="BBA" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_1st_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Ib=$row1["Ib"];
                    $Ell=$row1["Ell"];
                    $Qtm=$row1["Qtm"];
                    $Bfa=$row1["Bfa"];
                    $total=$Ib+$Ell+$Qtm+$Bfa;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Introduction to Business</td>
                                        <td>$Ib</td>
                                    </tr>
                                    <tr>
                                        <td>English Language and Literature</td>
                                        <td>$Ell</td>
                                    </tr>
                                    <tr>
                                        <td>Quantitative Techniques for Management</td>
                                        <td>$Qtm</td>
                                    </tr>
                                    <tr>
                                        <td>Basic Financial Accounting</td>
                                        <td>$Bfa</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";   
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_2nd_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $eco=$row1["Eco"];
                    $mtp=$row1["Mtp"];
                    $Cma=$row1["Cma"];
                    $cm=$row1["Cm"];
                    $total=$eco+$mtp+$Cma+$cm;
                    $per=(($total/80)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Economics</td>
                                        <td>$eco</td>
                                    </tr>
                                    <tr>
                                        <td>Management Theory and Practices</td>
                                        <td>$mtp</td>
                                    </tr>
                                    <tr>
                                        <td>Cost and Management Accounting</td>
                                        <td>$Cma</td>
                                    </tr>
                                    <tr>
                                        <td>Computer for Management</td>
                                        <td>$cm</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_3rd_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Pm=$row1["Pm"];
                    $Becg=$row1["Becg"];
                    $Ibi=$row1["Ibi"];
                    $Bcl=$row1["Bcl"];
                    $Ce=$row1["Ce"];
                    $total=$Pm+$Becg+$Ibi+$Bcl+$Ce;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Result</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                    }
            
                    .result-container {
                        padding: 10px;
                        border: 7px solid rgb(26, 63, 229);
                        margin: 30px;
                        border-radius: 30px;
                        font-size: 30px;
                        text-align: center;
                    }
            
                    .result-container h1 {
                        color: red;
                    }
            
                    hr {
                        height: 4px;
                        background-color: blue;
                        border: none;
                    }
            
                    table {
                        font-size: 28px;
                        margin-top: 20px;
                        border-collapse: collapse;
                        width: 100%;
                    }
            
                    table, th, td {
                        border: 2px solid blue;
                    }
            
                    th, td {
                        padding: 10px;
                        text-align: center;
                    }
            
                    .total-percentage {
                        text-align: center;
                        margin-top: 10px;
                    }
            
                    @media (max-width: 768px) {
                        .result-container {
                            font-size: 20px;
                        }
            
                        table {
                            font-size: 18px;
                        }
                    }
                </style>
            </head>
            <body>
                <div class='result-container'>
                    <h1>RESULT</h1>
                    <hr>
                    <table>
                        <tr>
                            <th>SUBJECT</th>
                            <th>SECURE MARK</th>
                        </tr>
                        <tr>
                            <td>Psychology for Management</td>
                            <td>$Pm</td>
                        </tr>
                        <tr>
                            <td>Business Ethics and Corporate Governance</td>
                            <td>$Becg</td>
                        </tr>
                        <tr>
                            <td>Introduction to Banking and Insurance</td>
                            <td>$Ibi</td>
                        </tr>
                        <tr>
                            <td>Business and Corporate Law</td>
                            <td>$Bcl</td>
                        </tr>
                        <tr>
                            <td>Communicative English</td>
                            <td>$Ce</td>
                        </tr>
                    </table>
                    <div class='total-percentage'>
                        <h3 >Total=$total</h3>
                        <h3 >%age=$per%</h3>
                    </div>
                </div>
            </body>
            </html>
            ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_4th_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Fm=$row1["Fm"];
                    $Mm=$row1["Mm"];
                    $Hrm=$row1["Hrm"];
                    $Pom=$row1["Pom"];
                    $Es=$row1["Es"];
                    $total=$Fm+$Mm+$dbs+$Hrm+$Pom+$Es;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Financial Management</td>
                                        <td>$Fm</td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Management</td>
                                        <td>$Mm</td>
                                    </tr>
                                    <tr>
                                        <td>Human Resource Management</td>
                                        <td>$Hrm</td>
                                    </tr>
                                    <tr>
                                        <td>Production and Operation Management</td>
                                        <td>$Pom</td>
                                    </tr>
                                    <tr>
                                        <td>Environment Studies</td>
                                        <td>$Es</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_5th_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Ob=$row1["Ob"];
                    $Fmi=$row1["Fmi"];
                    $Asp=$row1["Asp"];
                    $Misd=$row1["Misd"];
                    $Isc=$row1["Isc"];
                    $total=$Ob+$Fmi+$Misd+$Isc+$Asp;
                    $per=(($total/100)*100);
                    echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Result</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                        }
                
                        .result-container {
                            padding: 10px;
                            border: 7px solid rgb(26, 63, 229);
                            margin: 30px;
                            border-radius: 30px;
                            font-size: 30px;
                            text-align: center;
                        }
                
                        .result-container h1 {
                            color: red;
                        }
                
                        hr {
                            height: 4px;
                            background-color: blue;
                            border: none;
                        }
                
                        table {
                            font-size: 28px;
                            margin-top: 20px;
                            border-collapse: collapse;
                            width: 100%;
                        }
                
                        table, th, td {
                            border: 2px solid blue;
                        }
                
                        th, td {
                            padding: 10px;
                            text-align: center;
                        }
                
                        .total-percentage {
                            text-align: center;
                            margin-top: 10px;
                        }
                
                        @media (max-width: 768px) {
                            .result-container {
                                font-size: 20px;
                            }
                
                            table {
                                font-size: 18px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='result-container'>
                        <h1>RESULT</h1>
                        <hr>
                        <table>
                            <tr>
                                <th>SUBJECT</th>
                                <th>SECURE MARK</th>
                            </tr>
                            <tr>
                                <td>Organizational Behavior</td>
                                <td>$Ob</td>
                            </tr>
                            <tr>
                                <td>Financial Markets and Institutions</td>
                                <td>$Fmi</td>
                            </tr>
                            <tr>
                                <td>Advertisement and Sales Promotion</td>
                                <td>$Asp</td>
                            </tr>
                            <tr>
                                <td>Management Information System and DSS</td>
                                <td>$Misd</td>
                            </tr>
                            <tr>
                                <td>Indian Society and Culture</td>
                                <td>$Isc</td>
                            </tr>
                        </table>
                        <div class='total-percentage'>
                            <h3 >Total=$total</h3>
                            <h3 >%age=$per%</h3>
                        </div>
                    </div>
                </body>
                </html>
                "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_6th_sem_2nd_unittest` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Rm=$row1["Rm"];
                    $Esbm=$row1["Esbm"];
                    $Ocd=$row1["Ocd"];
                    $Dv=$row1["Dv"];
                    $Ebus=$row1["Ebus"];
                    $total=$Ocd+$Dv+$Ebus+$Rm+$Esbm;
                    $per=(($total/100)*100);
                    $grade=null;
                    echo "
                    <!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Research Methodology</td>
                                        <td>$Rm</td>
                                    </tr>
                                    <tr>
                                        <td>Entrepreneurship and Small Business Management</td>
                                        <td>$Esbm</td>
                                    </tr>
                                    <tr>
                                        <td>Organizational Change and Development</td>
                                        <td>$Ocd</td>
                                    </tr>
                                    <tr>
                                        <td>Dissertation and Viva-voce</td>
                                        <td>$Dv</td>
                                    </tr>
                                    <tr>
                                        <td>E-Business</td>
                                        <td>$Ebus</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
                
            }
            
            
            //INTERNAL 1
            
            
            else if (isset($_POST['Internal_1']) && $_POST['Internal_1'] === 'true') {
                
                //BSC-CS(H)
                if($course=="BSC-CS(H)" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_1st_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["id"];
                    $c=$row1["c"];
                    $dl=$row1["dl"];
                    $math=$row1["math"];
                    $evs=$row1["evs"];
                    $type=$row1["type"];
                    $total=$c+$dl+$math+$evs;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <h3>EXAM TYPE : INTERNAL-1</h3>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>C Programming</td>
                                        <td>$c</td>
                                    </tr>
                                    <tr>
                                        <td>Digital Logic</td>
                                        <td>$dl</td>
                                    </tr>
                                    <tr>
                                        <td>Mathematics</td>
                                        <td>$math</td>
                                    </tr>
                                    <tr>
                                        <td>Environmental Science</td>
                                        <td>$evs</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_2nd_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $Eng=$row1["Eng"];
                    $Ds=$row1["Ds"];
                    $Cpp=$row1["Cpp"];
                    $Physics=$row1["Physics"];
                    $type=$row1["type"];
                    $total=$Cpp+$Ds+$Eng+$Physics;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 24px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td>$Eng</td>
                                </tr>
                                <tr>
                                    <td>CPP Programming</td>
                                    <td>$Cpp</td>
                                </tr>
                                <tr>
                                    <td>Data Structure</td>
                                    <td>$Ds</td>
                                </tr>
                                <tr>
                                    <td>Physics</td>
                                    <td>$Physics</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total=$total</h3>
                                <h3>%age=$per%</h3>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";   
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_3rd_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $java=$row1["Java"];
                    $dbs=$row1["Dbs"];
                    $dms=$row1["Dms"];
                    $python=$row1["Python"];
                    $algaebra=$row1["Algaebra"];
                    $total=$java+$dbs+$dms+$algaebra+$python;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Java Programming</td>
                                        <td>$java</td>
                                    </tr>
                                    <tr>
                                        <td>Database System</td>
                                        <td>$dbs</td>
                                    </tr>
                                    <tr>
                                        <td>Discrete Mathematics</td>
                                        <td>$dms</td>
                                    </tr>
                                    <tr>
                                        <td>Python</td>
                                        <td>$python</td>
                                    </tr>
                                    <tr>
                                        <td>Algebra</td>
                                        <td>$algaebra</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_4th_sem_1st_internal` where Id='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $os=$row1["Os"];
                    $cn=$row1["Cn"];
                    $Cg=$row1["Cg"];
                    $Physics=$row1["Physics"];
                    $Android=$row1["Android"];
                    $type=$row1["type"];
                    $total=$os+$cn+$Cg+$Physics+$Android;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Operating System</td>
                                        <td>$os</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Network</td>
                                        <td>$cn</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Graphics</td>
                                        <td>$Cg</td>
                                    </tr>
                                    <tr>
                                        <td>Android</td>
                                        <td>$Android</td>
                                    </tr>
                                    <tr>
                                        <td>Physics</td>
                                        <td>$Physics</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_5th_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $Wt=$row1["Wt"];
                    $Se=$row1["Se"];
                    $Nt=$row1["Nt"];
                    $Unix=$row1["Unix"];
                    $type=$row1["type"];
                    $total=$Unix+$Nt+$Se+$Wt;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 24px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            <h3>EXAM TYPE : INTERNAL-1</h3>
                            <hr>
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>Web Technology</td>
                                    <td>$Wt</td>
                                </tr>
                                <tr>
                                    <td>Software Engineering</td>
                                    <td>$Se</td>
                                </tr>
                                <tr>
                                    <td>numeric Technique</td>
                                    <td> $Nt</td>
                                </tr>
                                <tr>
                                    <td>Unix shell Programming</td>
                                    <td>$Unix</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total= $total</h3>
                                <h3>%age= $per</h3>
                            </div>
                        </div>
                    </body>
                    </html>"; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_6th_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                $per=0;
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $ai=$row1["Ai"];
                    $adt=$row1["Adt"];
                    $dsc=$row1["Dsc"];
                    $type=$row1["type"];
                    $total=$ai+$adt+$dsc;
                    $per=(($total/120)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 42px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <h3>EXAM TYPE : UNIT TEST-1</h3>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Artificial Intelligence</td>
                                        <td>$ai</td>
                                    </tr>
                                    <tr>
                                        <td>Algorithm Design Tq</td>
                                        <td>$adt</td>
                                    </tr>
                                    <tr>
                                        <td>Data Science</td>
                                        <td>$dsc</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             }
             
             //BCA
             
             if($course=="BCA" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_1st_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $c=$row1["C"];
                    $dl=$row1["Dl"];
                    $mgmt=$row1["Management"];
                    $evs=$row1["Evs"];
                    $total=$c+$dl+$mgmt+$evs;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Result</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                        }
                
                        .result-container {
                            padding: 10px;
                            border: 7px solid rgb(26, 63, 229);
                            margin: 30px;
                            border-radius: 30px;
                            font-size: 30px;
                            text-align: center;
                        }
                
                        .result-container h1 {
                            color: red;
                        }
                
                        hr {
                            height: 4px;
                            background-color: blue;
                            border: none;
                        }
                
                        table {
                            font-size: 24px;
                            margin-top: 20px;
                            border-collapse: collapse;
                            width: 100%;
                        }
                
                        table, th, td {
                            border: 2px solid blue;
                        }
                
                        th, td {
                            padding: 10px;
                            text-align: center;
                        }
                
                        .total-percentage {
                            text-align: center;
                            margin-top: 10px;
                        }
                
                        @media (max-width: 768px) {
                            .result-container {
                                font-size: 20px;
                            }
                
                            table {
                                font-size: 18px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='result-container'>
                        <h1>RESULT</h1>
                        <hr>
                        
                        <table>
                            <tr>
                                <th>SUBJECT</th>
                                <th>SECURE MARK</th>
                            </tr>
                            <tr>
                                <td>Environmental Science</td>
                                <td>$evs</td>
                            </tr>
                            <tr>
                                <td>Digital Logic</td>
                                <td>$dl</td>
                            </tr>
                            <tr>
                                <td>C Programming</td>
                                <td>$c</td>
                            </tr>
                            <tr>
                                <td>Management</td>
                                <td>$mgmt</td>
                            </tr>
                        </table>
                        <div class='total-percentage'>
                            <h3 >Total=$total</h3>
                            <h3 >%age=$per%</h3>
                        </div>
                    </div>
                </body>
                </html>
                ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_2nd_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $cpp=$row1["Cpp"];
                    $ds=$row1["Ds"];
                    $eng=$row1["English"];
                    $statistics=$row1["Statistics"];
                    $type=$row1["type"];
                    $total=$cpp+$ds+$eng+$statistics;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>English</td>
                                        <td>$eng</td>
                                    </tr>
                                    <tr>
                                        <td>C++ Programming</td>
                                        <td>$cpp</td>
                                    </tr>
                                    <tr>
                                        <td>Data Structure</td>
                                        <td>$ds</td>
                                    </tr>
                                    <tr>
                                        <td>Statistics</td>
                                        <td>$statistics</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_3rd_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $co=$row1["Co"];
                    $java=$row1["Java"];
                    $dms=$row1["Dms"];
                    $acc=$row1["B_Accounting"];
                    $python=$row1["Python"];
                    $total=$co+$java+$dms+$acc+$python;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Computer Organization</td>
                                        <td>$co</td>
                                    </tr>
                                    <tr>
                                        <td>Java Programming</td>
                                        <td>$java</td>
                                    </tr>
                                    <tr>
                                        <td>Discrete Mathematical St</td>
                                        <td>$dms</td>
                                    </tr>
                                    <tr>
                                        <td>Business Accounting</td>
                                        <td>$acc</td>
                                    </tr>
                                    <tr>
                                        <td>Python Programming</td>
                                        <td>$python</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_4th_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $os=$row1["Os"];
                    $cn=$row1["Cn"];
                    $dbs=$row1["Dbs"];
                    $android=$row1["Android"];
                    $eco=$row1["B_Economics"];
                    $total=$os+$cn+$dbs+$eco+$android;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Operating System</td>
                                        <td>$os</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Network</td>
                                        <td>$cn</td>
                                    </tr>
                                    <tr>
                                        <td>Database System</td>
                                        <td>$dbs</td>
                                    </tr>
                                    <tr>
                                        <td>Android</td>
                                        <td>$android</td>
                                    </tr>
                                    <tr>
                                        <td>Business Economics</td>
                                        <td>$eco</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_5th_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $wt=$row1["Wt"];
                    $se=$row1["Se"];
                    $unix=$row1["Unix"];
                    $dm=$row1["Data_Mining"];
                    $total=$wt+$se+$unix+$dm;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Web Technology</td>
                                        <td>$wt</td>
                                    </tr>
                                    <tr>
                                        <td>Software Engineering</td>
                                        <td>$se</td>
                                    </tr>
                                    <tr>
                                        <td>Unix Shell Programming</td>
                                        <td>$unix</td>
                                    </tr>
                                    <tr>
                                        <td>Data Mining</td>
                                        <td>$dm</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_6th_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $cg=$row1["Cg"];
                    $nt=$row1["Nt"];
                    $dsc=$row1["Dsc"];
                    $total=$cg+$nt+$dsc;
                    $per=(($total/120)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 28px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>Computer Graphics</td>
                                    <td>$cg</td>
                                </tr>
                                <tr>
                                    <td>Numeric Technique</td>
                                    <td>$nt</td>
                                </tr>
                                <tr>
                                    <td>Data Science</td>
                                    <td>$dsc</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total=$total</h3>
                                <h3>%age=$per%</h3>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";   
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             //BBA
             
             if($course=="BBA" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_1st_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                   $Ib=$row1["Ib"];
                    $Ell=$row1["Ell"];
                    $Qtm=$row1["Qtm"];
                    $Bfa=$row1["Bfa"];
                    $total=$Ib+$Ell+$Qtm+$Bfa;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Introduction to Business</td>
                                        <td>$Ib</td>
                                    </tr>
                                    <tr>
                                        <td>English Language and Literature</td>
                                        <td>$Ell</td>
                                    </tr>
                                    <tr>
                                        <td>Quantitative Techniques for Management</td>
                                        <td>$Qtm</td>
                                    </tr>
                                    <tr>
                                        <td>Basic Financial Accounting</td>
                                        <td>$Bfa</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_2nd_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $eco=$row1["Eco"];
                    $mtp=$row1["Mtp"];
                    $Cma=$row1["Cma"];
                    $cm=$row1["Cm"];
                    $total=$eco+$mtp+$Cma+$cm;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Economics</td>
                                        <td>$eco</td>
                                    </tr>
                                    <tr>
                                        <td>Management Theory and Practices</td>
                                        <td>$mtp</td>
                                    </tr>
                                    <tr>
                                        <td>Cost and Management Accounting</td>
                                        <td>$Cma</td>
                                    </tr>
                                    <tr>
                                        <td>Computer for Management</td>
                                        <td>$cm</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_3rd_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Pm=$row1["Pm"];
                    $Becg=$row1["Becg"];
                    $Ibi=$row1["Ibi"];
                    $Bcl=$row1["Bcl"];
                    $Ce=$row1["Ce"];
                    $total=$Pm+$Becg+$Ibi+$Bcl+$Ce;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Result</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                    }
            
                    .result-container {
                        padding: 10px;
                        border: 7px solid rgb(26, 63, 229);
                        margin: 30px;
                        border-radius: 30px;
                        font-size: 30px;
                        text-align: center;
                    }
            
                    .result-container h1 {
                        color: red;
                    }
            
                    hr {
                        height: 4px;
                        background-color: blue;
                        border: none;
                    }
            
                    table {
                        font-size: 28px;
                        margin-top: 20px;
                        border-collapse: collapse;
                        width: 100%;
                    }
            
                    table, th, td {
                        border: 2px solid blue;
                    }
            
                    th, td {
                        padding: 10px;
                        text-align: center;
                    }
            
                    .total-percentage {
                        text-align: center;
                        margin-top: 10px;
                    }
            
                    @media (max-width: 768px) {
                        .result-container {
                            font-size: 20px;
                        }
            
                        table {
                            font-size: 18px;
                        }
                    }
                </style>
            </head>
            <body>
                <div class='result-container'>
                    <h1>RESULT</h1>
                    <hr>
                    <table>
                        <tr>
                            <th>SUBJECT</th>
                            <th>SECURE MARK</th>
                        </tr>
                        <tr>
                            <td>Psychology for Management</td>
                            <td>$Pm</td>
                        </tr>
                        <tr>
                            <td>Business Ethics and Corporate Governance</td>
                            <td>$Becg</td>
                        </tr>
                        <tr>
                            <td>Introduction to Banking and Insurance</td>
                            <td>$Ibi</td>
                        </tr>
                        <tr>
                            <td>Business and Corporate Law</td>
                            <td>$Bcl</td>
                        </tr>
                        <tr>
                            <td>Communicative English</td>
                            <td>$Ce</td>
                        </tr>
                    </table>
                    <div class='total-percentage'>
                        <h3 >Total=$total</h3>
                        <h3 >%age=$per%</h3>
                    </div>
                </div>
            </body>
            </html>
            ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_4th_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Fm=$row1["Fm"];
                    $Mm=$row1["Mm"];
                    $Hrm=$row1["Hrm"];
                    $Pom=$row1["Pom"];
                    $Es=$row1["Es"];
                    $total=$Fm+$Mm+$dbs+$Hrm+$Pom+$Es;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Financial Management</td>
                                        <td>$Fm</td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Management</td>
                                        <td>$Mm</td>
                                    </tr>
                                    <tr>
                                        <td>Human Resource Management</td>
                                        <td>$Hrm</td>
                                    </tr>
                                    <tr>
                                        <td>Production and Operation Management</td>
                                        <td>$Pom</td>
                                    </tr>
                                    <tr>
                                        <td>Environment Studies</td>
                                        <td>$Es</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_5th_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Ob=$row1["Ob"];
                    $Fmi=$row1["Fmi"];
                    $Asp=$row1["Asp"];
                    $Misd=$row1["Misd"];
                    $Isc=$row1["Isc"];
                    $total=$Ob+$Fmi+$Misd+$Isc+$Asp;
                    $per=(($total/200)*100);
                    echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Result</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                        }
                
                        .result-container {
                            padding: 10px;
                            border: 7px solid rgb(26, 63, 229);
                            margin: 30px;
                            border-radius: 30px;
                            font-size: 30px;
                            text-align: center;
                        }
                
                        .result-container h1 {
                            color: red;
                        }
                
                        hr {
                            height: 4px;
                            background-color: blue;
                            border: none;
                        }
                
                        table {
                            font-size: 28px;
                            margin-top: 20px;
                            border-collapse: collapse;
                            width: 100%;
                        }
                
                        table, th, td {
                            border: 2px solid blue;
                        }
                
                        th, td {
                            padding: 10px;
                            text-align: center;
                        }
                
                        .total-percentage {
                            text-align: center;
                            margin-top: 10px;
                        }
                
                        @media (max-width: 768px) {
                            .result-container {
                                font-size: 20px;
                            }
                
                            table {
                                font-size: 18px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='result-container'>
                        <h1>RESULT</h1>
                        <hr>
                        <table>
                            <tr>
                                <th>SUBJECT</th>
                                <th>SECURE MARK</th>
                            </tr>
                            <tr>
                                <td>Organizational Behavior</td>
                                <td>$Ob</td>
                            </tr>
                            <tr>
                                <td>Financial Markets and Institutions</td>
                                <td>$Fmi</td>
                            </tr>
                            <tr>
                                <td>Advertisement and Sales Promotion</td>
                                <td>$Asp</td>
                            </tr>
                            <tr>
                                <td>Management Information System and DSS</td>
                                <td>$Misd</td>
                            </tr>
                            <tr>
                                <td>Indian Society and Culture</td>
                                <td>$Isc</td>
                            </tr>
                        </table>
                        <div class='total-percentage'>
                            <h3 >Total=$total</h3>
                            <h3 >%age=$per%</h3>
                        </div>
                    </div>
                </body>
                </html>
                ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_6th_sem_1st_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Rm=$row1["Rm"];
                    $Esbm=$row1["Esbm"];
                    $Ocd=$row1["Ocd"];
                    $Dv=$row1["Dv"];
                    $Ebus=$row1["Ebus"];
                    $total=$Ocd+$Dv+$Ebus+$Rm+$Esbm;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "
                    <!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Research Methodology</td>
                                        <td>$Rm</td>
                                    </tr>
                                    <tr>
                                        <td>Entrepreneurship and Small Business Management</td>
                                        <td>$Esbm</td>
                                    </tr>
                                    <tr>
                                        <td>Organizational Change and Development</td>
                                        <td>$Ocd</td>
                                    </tr>
                                    <tr>
                                        <td>Dissertation and Viva-voce</td>
                                        <td>$Dv</td>
                                    </tr>
                                    <tr>
                                        <td>E-Business</td>
                                        <td>$Ebus</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 

                
            }
            
            
            //INTERNAL 2
            else if (isset($_POST['Internal_2']) && $_POST['Internal_2'] === 'true') {
            //BCA
                $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";
                
                if($course=="BCA" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_1st_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $c=$row1["C"];
                    $dl=$row1["Dl"];
                    $mgmt=$row1["Management"];
                    $evs=$row1["Evs"];
                    $total=$c+$dl+$mgmt+$evs;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Result</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                        }
                
                        .result-container {
                            padding: 10px;
                            border: 7px solid rgb(26, 63, 229);
                            margin: 30px;
                            border-radius: 30px;
                            font-size: 30px;
                            text-align: center;
                        }
                
                        .result-container h1 {
                            color: red;
                        }
                
                        hr {
                            height: 4px;
                            background-color: blue;
                            border: none;
                        }
                
                        table {
                            font-size: 24px;
                            margin-top: 20px;
                            border-collapse: collapse;
                            width: 100%;
                        }
                
                        table, th, td {
                            border: 2px solid blue;
                        }
                
                        th, td {
                            padding: 10px;
                            text-align: center;
                        }
                
                        .total-percentage {
                            text-align: center;
                            margin-top: 10px;
                        }
                
                        @media (max-width: 768px) {
                            .result-container {
                                font-size: 20px;
                            }
                
                            table {
                                font-size: 18px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='result-container'>
                        <h1>RESULT</h1>
                        <hr>
                        
                        <table>
                            <tr>
                                <th>SUBJECT</th>
                                <th>SECURE MARK</th>
                            </tr>
                            <tr>
                                <td>Environmental Science</td>
                                <td>$evs</td>
                            </tr>
                            <tr>
                                <td>Digital Logic</td>
                                <td>$dl</td>
                            </tr>
                            <tr>
                                <td>C Programming</td>
                                <td>$c</td>
                            </tr>
                            <tr>
                                <td>Management</td>
                                <td>$mgmt</td>
                            </tr>
                        </table>
                        <div class='total-percentage'>
                            <h3 >Total=$total</h3>
                            <h3 >%age=$per%</h3>
                        </div>
                    </div>
                </body>
                </html>
                "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_2nd_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $cpp=$row1["Cpp"];
                    $ds=$row1["Ds"];
                    $eng=$row1["English"];
                    $statistics=$row1["Statistics"];
                    $type=$row1["type"];
                    $total=$cpp+$ds+$eng+$statistics;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>English</td>
                                        <td>$eng</td>
                                    </tr>
                                    <tr>
                                        <td>C++ Programming</td>
                                        <td>$cpp</td>
                                    </tr>
                                    <tr>
                                        <td>Data Structure</td>
                                        <td>$ds</td>
                                    </tr>
                                    <tr>
                                        <td>Statistics</td>
                                        <td>$statistics</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_3rd_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $co=$row1["Co"];
                    $java=$row1["Java"];
                    $dms=$row1["Dms"];
                    $acc=$row1["B_Accounting"];
                    $python=$row1["Python"];
                    $total=$co+$java+$dms+$acc+$python;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Computer Organization</td>
                                        <td>$co</td>
                                    </tr>
                                    <tr>
                                        <td>Java Programming</td>
                                        <td>$java</td>
                                    </tr>
                                    <tr>
                                        <td>Discrete Mathematical St</td>
                                        <td>$dms</td>
                                    </tr>
                                    <tr>
                                        <td>Business Accounting</td>
                                        <td>$acc</td>
                                    </tr>
                                    <tr>
                                        <td>Python Programming</td>
                                        <td>$python</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";   
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_4th_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $os=$row1["Os"];
                    $cn=$row1["Cn"];
                    $dbs=$row1["Dbs"];
                    $android=$row1["Android"];
                    $eco=$row1["B_Economics"];
                    $total=$os+$cn+$dbs+$eco+$android;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Operating System</td>
                                        <td>$os</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Network</td>
                                        <td>$cn</td>
                                    </tr>
                                    <tr>
                                        <td>Database System</td>
                                        <td>$dbs</td>
                                    </tr>
                                    <tr>
                                        <td>Android</td>
                                        <td>$android</td>
                                    </tr>
                                    <tr>
                                        <td>Business Economics</td>
                                        <td>$eco</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_5th_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $wt=$row1["Wt"];
                    $se=$row1["Se"];
                    $unix=$row1["Unix"];
                    $dm=$row1["Data_Mining"];
                    $total=$wt+$se+$unix+$dm;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Web Technology</td>
                                        <td>$wt</td>
                                    </tr>
                                    <tr>
                                        <td>Software Engineering</td>
                                        <td>$se</td>
                                    </tr>
                                    <tr>
                                        <td>Unix Shell Programming</td>
                                        <td>$unix</td>
                                    </tr>
                                    <tr>
                                        <td>Data Mining</td>
                                        <td>$dm</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BCA" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bca_6th_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $cg=$row1["Cg"];
                    $nt=$row1["Nt"];
                    $dsc=$row1["Dsc"];
                    $total=$cg+$nt+$dsc;
                    $per=(($total/120)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Result</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                        }
                
                        .result-container {
                            padding: 10px;
                            border: 7px solid rgb(26, 63, 229);
                            margin: 30px;
                            border-radius: 30px;
                            font-size: 30px;
                            text-align: center;
                        }
                
                        .result-container h1 {
                            color: red;
                        }
                
                        hr {
                            height: 4px;
                            background-color: blue;
                            border: none;
                        }
                
                        table {
                            font-size: 28px;
                            margin-top: 20px;
                            border-collapse: collapse;
                            width: 100%;
                        }
                
                        table, th, td {
                            border: 2px solid blue;
                        }
                
                        th, td {
                            padding: 10px;
                            text-align: center;
                        }
                
                        .total-percentage {
                            text-align: center;
                            margin-top: 10px;
                        }
                
                        @media (max-width: 768px) {
                            .result-container {
                                font-size: 20px;
                            }
                
                            table {
                                font-size: 18px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='result-container'>
                        <h1>RESULT</h1>
                        <hr>
                        
                        <table>
                            <tr>
                                <th>SUBJECT</th>
                                <th>SECURE MARK</th>
                            </tr>
                            <tr>
                                <td>Computer Graphics</td>
                                <td>$cg</td>
                            </tr>
                            <tr>
                                <td>Numeric Technique</td>
                                <td>$nt</td>
                            </tr>
                            <tr>
                                <td>Data Science</td>
                                <td>$dsc</td>
                            </tr>
                        </table>
                        <div class='total-percentage'>
                            <h3>Total=$total</h3>
                            <h3>%age=$per%</h3>
                        </div>
                    </div>
                </body>
                </html>
                ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             
             //BSC-CS(H)
             
             
                if($course=="BSC-CS(H)" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_1st_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["id"];
                    $c=$row1["c"];
                    $dl=$row1["dl"];
                    $math=$row1["math"];
                    $evs=$row1["evs"];
                    $type=$row1["type"];
                    $total=$c+$dl+$math+$evs;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <h3>EXAM TYPE : INTERNAL-1</h3>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>C Programming</td>
                                        <td>$c</td>
                                    </tr>
                                    <tr>
                                        <td>Digital Logic</td>
                                        <td>$dl</td>
                                    </tr>
                                    <tr>
                                        <td>Mathematics</td>
                                        <td>$math</td>
                                    </tr>
                                    <tr>
                                        <td>Environmental Science</td>
                                        <td>$evs</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_2nd_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $Eng=$row1["Eng"];
                    $Ds=$row1["Ds"];
                    $Cpp=$row1["Cpp"];
                    $Physics=$row1["Physics"];
                    $type=$row1["type"];
                    $total=$Cpp+$Ds+$Eng+$Physics;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 24px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td>$Eng</td>
                                </tr>
                                <tr>
                                    <td>CPP Programming</td>
                                    <td>$Cpp</td>
                                </tr>
                                <tr>
                                    <td>Data Structure</td>
                                    <td>$Ds</td>
                                </tr>
                                <tr>
                                    <td>Physics</td>
                                    <td>$Physics</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total=$total</h3>
                                <h3>%age=$per%</h3>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_3rd_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $java=$row1["Java"];
                    $dbs=$row1["Dbs"];
                    $dms=$row1["Dms"];
                    $python=$row1["Python"];
                    $algaebra=$row1["Algaebra"];
                    $total=$java+$dbs+$dms+$algaebra+$python;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Java Programming</td>
                                        <td>$java</td>
                                    </tr>
                                    <tr>
                                        <td>Database System</td>
                                        <td>$dbs</td>
                                    </tr>
                                    <tr>
                                        <td>Discrete Mathematics</td>
                                        <td>$dms</td>
                                    </tr>
                                    <tr>
                                        <td>Python</td>
                                        <td>$python</td>
                                    </tr>
                                    <tr>
                                        <td>Algebra</td>
                                        <td>$algaebra</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total></h3>
                                    <h3>%age=$per</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_4th_sem_2nd_internal` where Id='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $os=$row1["Os"];
                    $cn=$row1["Cn"];
                    $Cg=$row1["Cg"];
                    $Physics=$row1["Physics"];
                    $Android=$row1["Android"];
                    $type=$row1["type"];
                    $total=$os+$cn+$Cg+$Physics+$Android;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 24px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                               
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Operating System</td>
                                        <td>$os</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Network</td>
                                        <td>$cn</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Graphics</td>
                                        <td>$Cg</td>
                                    </tr>
                                    <tr>
                                        <td>Android</td>
                                        <td>$Android</td>
                                    </tr>
                                    <tr>
                                        <td>Physics</td>
                                        <td>$Physics</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_5th_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $id=$row1["ID"];
                    $Wt=$row1["Wt"];
                    $Se=$row1["Se"];
                    $Nt=$row1["Nt"];
                    $Unix=$row1["Unix"];
                    $type=$row1["type"];
                    $total=$Unix+$Nt+$Se+$Wt;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Result</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }
                    
                            .result-container {
                                padding: 10px;
                                border: 7px solid rgb(26, 63, 229);
                                margin: 30px;
                                border-radius: 30px;
                                font-size: 30px;
                                text-align: center;
                            }
                    
                            .result-container h1 {
                                color: red;
                            }
                    
                            hr {
                                height: 4px;
                                background-color: blue;
                                border: none;
                            }
                    
                            table {
                                font-size: 24px;
                                margin-top: 20px;
                                border-collapse: collapse;
                                width: 100%;
                            }
                    
                            table, th, td {
                                border: 2px solid blue;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: center;
                            }
                    
                            .total-percentage {
                                text-align: center;
                                margin-top: 10px;
                            }
                    
                            @media (max-width: 768px) {
                                .result-container {
                                    font-size: 20px;
                                }
                    
                                table {
                                    font-size: 18px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class='result-container'>
                            <h1>RESULT</h1>
                            <hr>
                            <h3>EXAM TYPE : INTERNAL-1</h3>
                            <hr>
                            <table>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>SECURE MARK</th>
                                </tr>
                                <tr>
                                    <td>Web Technology</td>
                                    <td>$Wt</td>
                                </tr>
                                <tr>
                                    <td>Software Engineering</td>
                                    <td>$Se</td>
                                </tr>
                                <tr>
                                    <td>numeric Technique</td>
                                    <td> $Nt</td>
                                </tr>
                                <tr>
                                    <td>Unix shell Programming</td>
                                    <td>$Unix</td>
                                </tr>
                            </table>
                            <div class='total-percentage'>
                                <h3>Total= $total</h3>
                                <h3>%age= $per</h3>
                            </div>
                        </div>
                    </body>
                    </html>"; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BSC-CS(H)" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bsc_6th_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                $per=0;
                if ($row1>0) 
                {
                    $ai=$row1["Ai"];
                    $adt=$row1["Adt"];
                    $dsc=$row1["Dsc"];
                    $total=$ai+$adt+$dsc;
                    $per=(($total/120)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 42px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Artificial Intelligence</td>
                                        <td>$ai</td>
                                    </tr>
                                    <tr>
                                        <td>Algorithm Design Tq</td>
                                        <td>$adt</td>
                                    </tr>
                                    <tr>
                                        <td>Data Science</td>
                                        <td>$dsc</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
            }
            
            //BBA
             
             if($course=="BBA" && $semester=="1st"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_1st_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Ib=$row1["Ib"];
                    $Ell=$row1["Ell"];
                    $Qtm=$row1["Qtm"];
                    $Bfa=$row1["Bfa"];
                    $total=$Ib+$Ell+$Qtm+$Bfa;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Introduction to Business</td>
                                        <td>$Ib</td>
                                    </tr>
                                    <tr>
                                        <td>English Language and Literature</td>
                                        <td>$Ell</td>
                                    </tr>
                                    <tr>
                                        <td>Quantitative Techniques for Management</td>
                                        <td>$Qtm</td>
                                    </tr>
                                    <tr>
                                        <td>Basic Financial Accounting</td>
                                        <td>$Bfa</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3>Total=$total</h3>
                                    <h3>%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="2nd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_2nd_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $eco=$row1["Eco"];
                    $mtp=$row1["Mtp"];
                    $Cma=$row1["Cma"];
                    $cm=$row1["Cm"];
                    $total=$eco+$mtp+$Cma+$cm;
                    $per=(($total/160)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Economics</td>
                                        <td>$eco</td>
                                    </tr>
                                    <tr>
                                        <td>Management Theory and Practices</td>
                                        <td>$mtp</td>
                                    </tr>
                                    <tr>
                                        <td>Cost and Management Accounting</td>
                                        <td>$Cma</td>
                                    </tr>
                                    <tr>
                                        <td>Computer for Management</td>
                                        <td>$cm</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="3rd"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_3rd_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Pm=$row1["Pm"];
                    $Becg=$row1["Becg"];
                    $Ibi=$row1["Ibi"];
                    $Bcl=$row1["Bcl"];
                    $Ce=$row1["Ce"];
                    $total=$Pm+$Becg+$Ibi+$Bcl+$Ce;
                    $per=(($total/200)*100);
                    $grade=null;
                   echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Result</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                    }
            
                    .result-container {
                        padding: 10px;
                        border: 7px solid rgb(26, 63, 229);
                        margin: 30px;
                        border-radius: 30px;
                        font-size: 30px;
                        text-align: center;
                    }
            
                    .result-container h1 {
                        color: red;
                    }
            
                    hr {
                        height: 4px;
                        background-color: blue;
                        border: none;
                    }
            
                    table {
                        font-size: 28px;
                        margin-top: 20px;
                        border-collapse: collapse;
                        width: 100%;
                    }
            
                    table, th, td {
                        border: 2px solid blue;
                    }
            
                    th, td {
                        padding: 10px;
                        text-align: center;
                    }
            
                    .total-percentage {
                        text-align: center;
                        margin-top: 10px;
                    }
            
                    @media (max-width: 768px) {
                        .result-container {
                            font-size: 20px;
                        }
            
                        table {
                            font-size: 18px;
                        }
                    }
                </style>
            </head>
            <body>
                <div class='result-container'>
                    <h1>RESULT</h1>
                    <hr>
                    <table>
                        <tr>
                            <th>SUBJECT</th>
                            <th>SECURE MARK</th>
                        </tr>
                        <tr>
                            <td>Psychology for Management</td>
                            <td>$Pm</td>
                        </tr>
                        <tr>
                            <td>Business Ethics and Corporate Governance</td>
                            <td>$Becg</td>
                        </tr>
                        <tr>
                            <td>Introduction to Banking and Insurance</td>
                            <td>$Ibi</td>
                        </tr>
                        <tr>
                            <td>Business and Corporate Law</td>
                            <td>$Bcl</td>
                        </tr>
                        <tr>
                            <td>Communicative English</td>
                            <td>$Ce</td>
                        </tr>
                    </table>
                    <div class='total-percentage'>
                        <h3 >Total=$total</h3>
                        <h3 >%age=$per%</h3>
                    </div>
                </div>
            </body>
            </html>
            ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="4th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_4th_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Fm=$row1["Fm"];
                    $Mm=$row1["Mm"];
                    $Hrm=$row1["Hrm"];
                    $Pom=$row1["Pom"];
                    $Es=$row1["Es"];
                    $total=$Fm+$Mm+$dbs+$Hrm+$Pom+$Es;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Financial Management</td>
                                        <td>$Fm</td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Management</td>
                                        <td>$Mm</td>
                                    </tr>
                                    <tr>
                                        <td>Human Resource Management</td>
                                        <td>$Hrm</td>
                                    </tr>
                                    <tr>
                                        <td>Production and Operation Management</td>
                                        <td>$Pom</td>
                                    </tr>
                                    <tr>
                                        <td>Environment Studies</td>
                                        <td>$Es</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="5th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_5th_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Ob=$row1["Ob"];
                    $Fmi=$row1["Fmi"];
                    $Asp=$row1["Asp"];
                    $Misd=$row1["Misd"];
                    $Isc=$row1["Isc"];
                    $total=$Ob+$Fmi+$Misd+$Isc+$Asp;
                    $per=(($total/200)*100);
                    echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Result</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                        }
                
                        .result-container {
                            padding: 10px;
                            border: 7px solid rgb(26, 63, 229);
                            margin: 30px;
                            border-radius: 30px;
                            font-size: 30px;
                            text-align: center;
                        }
                
                        .result-container h1 {
                            color: red;
                        }
                
                        hr {
                            height: 4px;
                            background-color: blue;
                            border: none;
                        }
                
                        table {
                            font-size: 28px;
                            margin-top: 20px;
                            border-collapse: collapse;
                            width: 100%;
                        }
                
                        table, th, td {
                            border: 2px solid blue;
                        }
                
                        th, td {
                            padding: 10px;
                            text-align: center;
                        }
                
                        .total-percentage {
                            text-align: center;
                            margin-top: 10px;
                        }
                
                        @media (max-width: 768px) {
                            .result-container {
                                font-size: 20px;
                            }
                
                            table {
                                font-size: 18px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='result-container'>
                        <h1>RESULT</h1>
                        <hr>
                        <table>
                            <tr>
                                <th>SUBJECT</th>
                                <th>SECURE MARK</th>
                            </tr>
                            <tr>
                                <td>Organizational Behavior</td>
                                <td>$Ob</td>
                            </tr>
                            <tr>
                                <td>Financial Markets and Institutions</td>
                                <td>$Fmi</td>
                            </tr>
                            <tr>
                                <td>Advertisement and Sales Promotion</td>
                                <td>$Asp</td>
                            </tr>
                            <tr>
                                <td>Management Information System and DSS</td>
                                <td>$Misd</td>
                            </tr>
                            <tr>
                                <td>Indian Society and Culture</td>
                                <td>$Isc</td>
                            </tr>
                        </table>
                        <div class='total-percentage'>
                            <h3 >Total=$total</h3>
                            <h3 >%age=$per%</h3>
                        </div>
                    </div>
                </body>
                </html>
                ";  
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
             if($course=="BBA" && $semester=="6th"){
                 $servername = "localhost";
                $username = "creativecollege_creative";
                $password = "creativecollege@123";
                $database = "creativecollege_Result";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql1= "SELECT * FROM `bba_6th_sem_2nd_internal` where ID='$id'";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
                if ($row1>0) 
                {
                    $Rm=$row1["Rm"];
                    $Esbm=$row1["Esbm"];
                    $Ocd=$row1["Ocd"];
                    $Dv=$row1["Dv"];
                    $Ebus=$row1["Ebus"];
                    $total=$Ocd+$Dv+$Ebus+$Rm+$Esbm;
                    $per=(($total/200)*100);
                    $grade=null;
                    echo "
                    <!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>Result</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .result-container {
                                    padding: 10px;
                                    border: 7px solid rgb(26, 63, 229);
                                    margin: 30px;
                                    border-radius: 30px;
                                    font-size: 30px;
                                    text-align: center;
                                }
                        
                                .result-container h1 {
                                    color: red;
                                }
                        
                                hr {
                                    height: 4px;
                                    background-color: blue;
                                    border: none;
                                }
                        
                                table {
                                    font-size: 28px;
                                    margin-top: 20px;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                        
                                table, th, td {
                                    border: 2px solid blue;
                                }
                        
                                th, td {
                                    padding: 10px;
                                    text-align: center;
                                }
                        
                                .total-percentage {
                                    text-align: center;
                                    margin-top: 10px;
                                }
                        
                                @media (max-width: 768px) {
                                    .result-container {
                                        font-size: 20px;
                                    }
                        
                                    table {
                                        font-size: 18px;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <div class='result-container'>
                                <h1>RESULT</h1>
                                <hr>
                                <table>
                                    <tr>
                                        <th>SUBJECT</th>
                                        <th>SECURE MARK</th>
                                    </tr>
                                    <tr>
                                        <td>Research Methodology</td>
                                        <td>$Rm</td>
                                    </tr>
                                    <tr>
                                        <td>Entrepreneurship and Small Business Management</td>
                                        <td>$Esbm</td>
                                    </tr>
                                    <tr>
                                        <td>Organizational Change and Development</td>
                                        <td>$Ocd</td>
                                    </tr>
                                    <tr>
                                        <td>Dissertation and Viva-voce</td>
                                        <td>$Dv</td>
                                    </tr>
                                    <tr>
                                        <td>E-Business</td>
                                        <td>$Ebus</td>
                                    </tr>
                                </table>
                                <div class='total-percentage'>
                                    <h3 >Total=$total</h3>
                                    <h3 >%age=$per%</h3>
                                </div>
                            </div>
                        </body>
                        </html>
                        "; 
                }
                else{
                 echo "<h1 align='Center'>NOT FOUND RESULT</h1>";
             }
             } 
        }
        
    ?>
</body>
</html>
