<?php
require 'vendor/autoload.php'; // Path to PhpSpreadsheet library

use PhpOffice\PhpSpreadsheet\IOFactory;

$servername = "localhost";
    $username = "creativecollege_creative";
    $password = "creativecollege@123";
    $database = "creativecollege_Result";

    $conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"])) {
    $excelFilePath = $_FILES["excel_file"]["tmp_name"];

    $spreadsheet = IOFactory::load($excelFilePath);
    $worksheet = $spreadsheet->getActiveSheet();

    foreach ($worksheet->getRowIterator() as $row) {
        $rowData = [];
        foreach ($row->getCellIterator() as $cell) {
            $rowData[] = $cell->getValue();
        }
        
        $sql = "INSERT INTO login (id, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $rowData[0], $rowData[1]);
        $stmt->execute();
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Excel Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .btn {
            border: 2px solid gray;
            color: gray;
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Excel File Upload</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="upload-btn-wrapper">
                <button class="btn">Select Excel File</button>
                <input type="file" name="excel_file">
            </div>
            <br>
            <input type="submit" class="btn" value="Upload" name="submit">
        </form>
    </div>
</body>
</html>

