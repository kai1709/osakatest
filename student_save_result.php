<?php
require_once('./fpdf181/fpdf.php');
require_once("function.php");
require_once("excel/PHPExcel.php");
require_once("excel/PHPExcel/IOFactory.php");
$HOST = "localhost";
$PORT = "5432";
$DBNAME = "OsakaTest";
$USERNAME = "postgres";
$PASSWORD = "123456";
$SCHEMA = "osakatest";

// $user_id = $_GET['id'];
// $readFile = "excel/answer_data.xlsx";

// if (!file_exists($readFile)) {
// 	exit($readFile. "が見つかりません。" . EOL);
// }
//DBサーバー接続	
$conn = pg_pconnect("host=" . $HOST . " port=" . $PORT . " dbname=" . $DBNAME . " user=" . $USERNAME . " password=" . $PASSWORD);

// $char_sql = 'SET CHARACTER SET UTF8';
// $result =  pg_query($link, $char_sql);
//DB選択
// $db_selected = mysqli_select_db($link, DEF_TARGET_DB);
// if (!$db_selected) {
// 	    die ('Cannot use '. DEF_TARGET_DB . " : " . mysql_error());
// }
$name = $_POST["student_name"];
$studentNumber = $_POST["student_number"];
$result_id = $_POST["result_id"];
$query_update = "UPDATE " . $SCHEMA . ".student_result SET student_name='" . $name . "', student_number='" . $studentNumber . "' WHERE result_id='" . $result_id . "'";  
$result = pg_query($conn, $query_update);
$query_select = "SELECT * FROM " . $SCHEMA . ".student_result WHERE result_id='" . $result_id . "'";  
$result_select = pg_query($conn, $query_select);
$student_name = "";
$num = pg_num_rows($result_select); 
$row = pg_fetch_row($result_select);
pg_close($conn);
class PDF extends FPDF
{
// Page header
function BasicTable($data)
{
    // Header
    $this->Cell(14,7, "", 1);
    
    for ($i = 1; $i < 21; $i++) {
        $this->Cell(9,7, "Q".$i, 1);
    }
    // foreach($header as $col)
    //     $this->Cell(40,7,$col,1);
    $this->Ln();
    // Data
    $this->Cell(14,6, "Task 1", 1);
    $this->Cell(9,6, $data[7], 1);
    for ($x = 9; $x < 18; $x++) {
        $this->Cell(9,6, $data[$x], 1);
    }
    $this->Ln();
    $this->Cell(14,6, "Task 2", 1);
    for ($x = 18; $x < 38; $x++) {
        $this->Cell(9,6, $data[$x], 1);
    }
    $this->Ln();
    // foreach($data as $row)
    // {
    //     foreach($row as $col)
    //         $this->Cell(40,6,$col,1);
    // }
}


function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Result',1,0,'C');
    // Line break
    $this->Ln(20);
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,10,'Student name: ' . $row[0],0,1);
$pdf->Cell(10,10,'Student number: ' . $row[2],0,1);
$pdf->BasicTable($row);

$pdf->Cell(10,10,'Total Task 1: ' . $row[3],0,1);
$pdf->Cell(10,10,'Total Task 2: ' . $row[4],0,1);
$pdf->Cell(10,10,'Total Score: ' . $row[5],0,1);
$pdf->Output();
