<?php
require_once "function.php";
require_once "excel/PHPExcel.php";
require_once "excel/PHPExcel/IOFactory.php";
require_once 'cache.class.php';
require_once "vendor/autoload.php";
use \Firebase\JWT\JWT;
    $key = "example_key";
    $HOST = "localhost";
    $PORT = "5432";
    $DBNAME = "OsakaTest";
    $USERNAME = "postgres";
    $PASSWORD = "123456";
    $SCHEMA = "osakatest";
    $readFile = "excel/answer_data.xlsx";
    $conn = pg_pconnect("host=" . $HOST . " port=" . $PORT . " dbname=" . $DBNAME . " user=" . $USERNAME . " password=" . $PASSWORD);
    $cache = new Cache();
    $jwt = $cache->retrieve('token');
    if (!$jwt) {
        header("Location: http://localhost:8888/login.php");
        die();
    }
    $decoded = JWT::decode($jwt, $key, array('HS256'));
    $username = $decoded->username;
    if (!$conn) {
        die('Not connected : ' . pg_last_error());
    } else {
    }
        $objPHPExcel = new PHPExcel();
        $query1 = "SELECT * FROM osakatest.student_result WHERE student_name IS NOT NULL";
        $exec1 = pg_query($query1) or die("Error in Query1");
        $serialnumber = 0;
        //Set header with temp array
        $tmparray = array("Student Number", "Student Name", "Student ID", "Level", "Question T1-1", "Question T1-2", "Question T1-3", "Question T1-4", "Question T1-5", "Question T1-6", "Question T1-7", "Question T1-8", "Question T1-9", "Question T1-10",
            "Question T2-1", "Question T2-2", "Question T2-3", "Question T2-4", "Question T2-5", "Question T2-6", "Question T2-7", "Question T2-8", "Question T2-9", "Question T2-10",
            "Question T2-11", "Question T2-12", "Question T2-13", "Question T2-14", "Question T2-15", "Question T2-16", "Question T2-17", "Question T2-18", "Question T2-19", "Question T2-20",
            "Score Task 1", "Score Task 2", "Total Score");
        //take new main array and set header array in it.
        $sheet = array($tmparray);
    
        while ($res1 = pg_fetch_array($exec1)) {
            $tmparray = array();
            $student_number = $res1['student_number'];
            array_push($tmparray, $student_number);
            $student_name = $res1['student_name'];
            array_push($tmparray, $student_name);
            $student_id = $res1['student_id'];
            array_push($tmparray, $student_id);
            $level = $res1['level'];
            array_push($tmparray, $level);
            for ($i = 1; $i < 11; $i++) {
                $question_collumn_name_task_1 = "question_t1_" . $i;
                array_push($tmparray, $res1[$question_collumn_name_task_1]);
            }
            for ($x = 1; $x < 21; $x++) {
                $question_collumn_name_task_2 = "question_t2_" . $x;
                array_push($tmparray, $res1[$question_collumn_name_task_2]);
            }
            $scoreTask1 = $res1['task_1_score'];
            array_push($tmparray, $scoreTask1);
            $scoreTask2 = $res1['task_2_score'];
            array_push($tmparray, $scoreTask2);
            $totalScore = $res1['total_score'];
            array_push($tmparray, $totalScore);
            array_push($sheet, $tmparray);
        }
        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="result.xlsx"');
        $worksheet = $objPHPExcel->getActiveSheet();
        foreach ($sheet as $row => $columns) {
            foreach ($columns as $column => $data) {
                $worksheet->setCellValueByColumnAndRow($column, $row + 1, $data);
            }
        }
        //make first row bold
        $objPHPExcel->getActiveSheet()->getStyle("A1:I1")->getFont()->setBold(true);
        $objPHPExcel->setActiveSheetIndex(0);
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save(str_replace('.php', '.xlsx', __FILE__));
        $file = $_SERVER['DOCUMENT_ROOT'] . "/download.xlsx";
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            unlink($file);
            exit;
        }
        ?>