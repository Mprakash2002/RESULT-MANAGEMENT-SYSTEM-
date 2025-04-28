<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCA</title>
    <style>
        #containor{
            justify-content: center;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            
        }
        .flex{
            margin: 15px;
            align-items: center;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            border: 2px solid blue;
            border-radius: 15px;
        }
        h2{
            text-align: center;
            color: rgb(255, 20, 208);
        }
        button{
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover{
            background-color: #fff;
            border: 2px solid red;
            color: black;
        }
        h1{
            text-align: center;
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1>BACHLOR IN COMPUTER APPLICATION</h1>
    <div id="containor">
        <div class="flex">
            <h2>SEMESTER 1</h2>
            <a href='BCAUPLOAD.php?Semester=1st&Exam=unittest-1'><Button>UNITTEST-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=1st&Exam=unittest-2'><Button>UNITTEST-2</Button></a>
            <a href='BCAUPLOAD.php?Semester=1st&Exam=internal-1'><Button>INTERNAL-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=1st&Exam=internal-2'><Button>INTERNAL-2</Button></a>
        </div>
        <div class="flex">
            <h2>SEMESTER 2</h2>
            <a href='BCAUPLOAD.php?Semester=2nd&Exam=unittest-1'><Button>UNITTEST-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=2nd&Exam=unittest-2'><Button>UNITTEST-2</Button></a>
            <a href='BCAUPLOAD.php?Semester=2nd&Exam=internal-1'><Button>INTERNAL-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=2nd&Exam=internal-2'><Button>INTERNAL-2</Button></a>
        </div>
        <div class="flex">
            <h2>SEMESTER 3</h2>
            <a href='BCAUPLOAD.php?Semester=3rd&Exam=unittest-1'><Button>UNITTEST-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=3rd&Exam=unittest-2'><Button>UNITTEST-2</Button></a>
            <a href='BCAUPLOAD.php?Semester=3rd&Exam=internal-1'><Button>INTERNAL-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=3rd&Exam=internal-2'><Button>INTERNAL-2</Button></a>

        </div>
        <div class="flex">
            <h2>SEMESTER 4</h2>
            <a href='BCAUPLOAD.php?Semester=4th&Exam=unittest-1'><Button>UNITTEST-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=4th&Exam=unittest-2'><Button>UNITTEST-2</Button></a>
            <a href='BCAUPLOAD.php?Semester=4th&Exam=internal-1'><Button>INTERNAL-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=4th&Exam=internal-2'><Button>INTERNAL-2</Button></a>
        </div>
        <div class="flex">
            <h2>SEMESTER 5</h2>
            <a href='BCAUPLOAD.php?Semester=5th&Exam=unittest-1'><Button>UNITTEST-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=5th&Exam=unittest-2'><Button>UNITTEST-2</Button></a>
            <a href='BCAUPLOAD.php?Semester=5th&Exam=internal-1'><Button>INTERNAL-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=5th&Exam=internal-2'><Button>INTERNAL-2</Button></a>
        </div>
        <div class="flex">
       	 <h2>SEMESTER 6</h2>
            <a href='BCAUPLOAD.php?Semester=6th&Exam=unittest-1'><Button>UNITTEST-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=6th&Exam=unittest-2'><Button>UNITTEST-2</Button></a>
            <a href='BCAUPLOAD.php?Semester=6th&Exam=internal-1'><Button>INTERNAL-1</Button></a>
            <a href='BCAUPLOAD.php?Semester=6th&Exam=internal-2'><Button>INTERNAL-2</Button></a>
        </div>
    </div>
</body>
</html>