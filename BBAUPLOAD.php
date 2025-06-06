<?php
require 'vendor/autoload.php'; // Path to PhpSpreadsheet library

use PhpOffice\PhpSpreadsheet\IOFactory;

$servername = "localhost";
    $username = "usesdrdghv";
    $password = "cgjgjhk";
    $database = "ffyjgjj";
    
    $sem=$_GET['Semester'];
    $exam=$_GET['Exam'];

    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    if(isset($_POST["submit"])) {
        
        //1ST
        if($sem=="1st" && $exam=="internal-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_1st_sem_1st_internal(Sl,Id,Ib,Ell,Qtm,Bfa) VALUES (?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
    
    if($sem=="1st" && $exam=="internal-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_1st_sem_2nd_internal(Sl,Id,Ib,Ell,Qtm,Bfa) VALUES (?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        
        
        if($sem=="1st" && $exam=="unittest-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_1st_sem_1st_unittest(Sl,Id,Ib,Ell,Qtm,Bfa) VALUES (?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
    
    if($sem=="1st" && $exam=="unittest-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_1st_sem_2nd_unittest(Sl,Id,Ib,Ell,Qtm,Bfa) VALUES (?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5]);
                $stmt->execute();
            }
    
            if ($stmt->affected_rows > 0) {
                
                    echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
                } else {
                    
                    echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
                }
    
            $stmt->close();
        }
        
        //2ND
        if($sem=="2nd" && $exam=="internal-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_2nd_sem_1st_internal(Sl,Id,Eco,Mtp,Cma,Cm) VALUES (?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        if($sem=="2nd" && $exam=="internal-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_2nd_sem_2nd_internal(Sl,Id,Eco,Mtp,Cma,Cm) VALUES (?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        if($sem=="2nd" && $exam=="unittest-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_2nd_sem_1st_unittest(Sl,Id,Eco,Mtp,Cma,Cm) VALUES (?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        if($sem=="2nd" && $exam=="unittest-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_2nd_sem_2nd_unittest(Sl,Id,Eco,Mtp,Cma,Cm) VALUES (?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        
        //3RD
        
        if($sem=="3rd" && $exam=="internal-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_3rd_sem_1st_internal(Sl,Id,Pm,Becg,Ibi,Bcl,Ce) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
         if($sem=="3rd" && $exam=="internal-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_3rd_sem_2nd_internal(Sl,Id,Pm,Becg,Ibi,Bcl,Ce) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
         if($sem=="3rd" && $exam=="unittest-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_3rd_sem_1st_unittest(Sl,Id,Pm,Becg,Ibi,Bcl,Ce) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        if($sem=="3rd" && $exam=="unittest-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_3rd_sem_2nd_unittest(Sl,Id,Pm,Becg,Ibi,Bcl,Ce) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        //4TH
        
        if($sem=="4th" && $exam=="internal-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_4th_sem_1st_internal(Sl,Id,Fm,Mm,Hrm,Pom,Es) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        if($sem=="4th" && $exam=="internal-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_4th_sem_2nd_internal(Sl,Id,Fm,Mm,Hrm,Pom,Es) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        
        if($sem=="4th" && $exam=="unittest-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_4th_sem_1st_unittest(Sl,Id,Fm,Mm,Hrm,Pom,Es) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        if($sem=="4th" && $exam=="unittest-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_4th_sem_2nd_unittest(Sl,Id,Fm,Mm,Hrm,Pom,Es) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        //5TH
        
        if($sem=="5th" && $exam=="internal-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_5th_sem_1st_internal(Sl,Id,Ob,Fmi,Asp,Misd,Isc) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        if($sem=="5th" && $exam=="internal-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_5th_sem_2nd_internal(Sl,Id,Ob,Fmi,Asp,Misd,Isc) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        if($sem=="5th" && $exam=="unittest-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_5th_sem_1st_unittest(Sl,Id,Ob,Fmi,Asp,Misd,Isc) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        if($sem=="5th" && $exam=="unittest-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_5th_sem_2nd_unittest(Sl,Id,Ob,Fmi,Asp,Misd,Isc) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        if($sem=="6th" && $exam=="internal-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_6th_sem_1st_internal(Sl,Id,Rm,Esbm,Ocd,Dv,Ebus) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        if($sem=="6th" && $exam=="internal-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_6th_sem_2nd_internal(Sl,Id,Rm,Esbm,Ocd,Dv,Ebus) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        if($sem=="6th" && $exam=="unittest-1")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_6th_sem_1st_unittest(Sl,Id,Rm,Esbm,Ocd,Dv,Ebus) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        if($sem=="6th" && $exam=="unittest-2")
        {
        
            $excelFilePath = $_FILES["excel_file"]["tmp_name"];
    
            $spreadsheet = IOFactory::load($excelFilePath);
            $worksheet = $spreadsheet->getActiveSheet();
        
            foreach ($worksheet->getRowIterator() as $row)
            {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell)
                {
                    $rowData[] = $cell->getValue();
                }
                
                $sql = "INSERT INTO bba_6th_sem_2nd_unittest(Sl,Id,Rm,Esbm,Ocd,Dv,Ebus) VALUES (?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $rowData[0], $rowData[1],$rowData[2], $rowData[3],$rowData[4], $rowData[5], $rowData[6]);
                $stmt->execute();
            }
    
        if ($stmt->affected_rows > 0) {
            
                echo "<script>alert('File uploaded successfully.'); window.location.assign('BBA.php')</script>";
            } else {
                
                echo "<script>alert('file upload Failed.'); window.location.assign('BBA.php')</script>";
            }

        $stmt->close();
        }
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    if(isset($_POST["Clear"]))
    {
        if($sem=="1st" && $exam=="internal-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_1st_sem_1st_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            // Close the connection
            $conn->close();
        }
        else if($sem=="1st" && $exam=="unittest-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_1st_sem_1st_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        else if($sem=="1st" && $exam=="internal-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_1st_sem_2nd_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        else if($sem=="1st" && $exam=="unittest-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_1st_sem_2nd_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        
        
        
        //2ND
        
         else if($sem=="2nd" && $exam=="internal-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_2nd_sem_1st_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            // Close the connection
            $conn->close();
        }
        else if($sem=="2nd" && $exam=="unittest-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_2nd_sem_1st_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        else if($sem=="2nd" && $exam=="internal-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_2nd_sem_2nd_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        else if($sem=="2nd" && $exam=="unittest-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_2nd_sem_2nd_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        
        //3RD
        
        else if($sem=="3rd" && $exam=="internal-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_3rd_sem_1st_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            // Close the connection
            $conn->close();
        }
        else if($sem=="3rd" && $exam=="unittest-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_3rd_sem_1st_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        if($sem=="3rd" && $exam=="internal-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_3rd_sem_2nd_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        else if($sem=="3rd" && $exam=="unittest-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_3rd_sem_2nd_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        
        
        //4TH
        
        else if($sem=="4th" && $exam=="internal-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_4th_sem_1st_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            // Close the connection
            $conn->close();
        }
        else if($sem=="4th" && $exam=="unittest-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_4th_sem_1st_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        if($sem=="4th" && $exam=="internal-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_4th_sem_2nd_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        else if($sem=="4th" && $exam=="unittest-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_4th_sem_2nd_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        
        //5TH
        
        else if($sem=="5th" && $exam=="internal-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_5th_sem_1st_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            // Close the connection
            $conn->close();
        }
        else if($sem=="5th" && $exam=="unittest-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_5th_sem_1st_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        if($sem=="5th" && $exam=="internal-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_5th_sem_2nd_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        else if($sem=="5th" && $exam=="unittest-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_5th_sem_2nd_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        
        //6TH
        
        else if($sem=="6th" && $exam=="internal-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_6th_sem_1st_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            // Close the connection
            $conn->close();
        }
        else if($sem=="6th" && $exam=="unittest-1")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_6th_sem_1st_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        if($sem=="6th" && $exam=="internal-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_6th_sem_2nd_internal";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        else if($sem=="6th" && $exam=="unittest-2")
        {
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "TRUNCATE TABLE bba_6th_sem_2nd_unittest";
            if ($conn->query($sql)) {
                echo "<script>alert('Data Cleared.'); window.location.assign('BBA.php')</script>";
            } else {
                echo "<script>alert('Error clearing Data.'); window.location.assign('BBA.php')</script>";
            }
            
            // Close the connection
            $conn->close();
        }
        
        
        
         $conn->close();
    }
        
?>

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
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Excel File Upload</h1>
        <form  method="POST" enctype="multipart/form-data">
        Select Excel File: <input type="file" name="excel_file">
        <input type="submit" value="Upload" name="submit">
        <input type="submit" value="Clear" name="Clear">
    </form>
    </div>
</body>
</html>
