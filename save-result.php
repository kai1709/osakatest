<?php
	// require_once("setting/define_config.php");
	require_once("function.php");
	require_once("excel/PHPExcel.php");
    require_once("excel/PHPExcel/IOFactory.php");
    
    // Config connect
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
    
	if (!$conn) {
		die('Not connected : ' . pg_last_error());
    }
    else {
        echo "Connect success \n";
    }

	// $char_sql = 'SET CHARACTER SET UTF8';
	// $result =  pg_query($link, $char_sql);
	//DB選択
	// $db_selected = mysqli_select_db($link, DEF_TARGET_DB);
	// if (!$db_selected) {
    // 	    die ('Cannot use '. DEF_TARGET_DB . " : " . mysql_error());
    // }
    $name = $_POST["name"];
    $studentId = $_POST["studentId"];
    $studentNumber = $_POST["studentNumber"];
    $level = $_POST["level"];
    $task1Score =  $_POST["scoreTask1"];
    $task2Score =  $_POST["scoreTask2"];
    $totalScore1 = $_POST["totalTask1"];
    $totalScore2 = $_POST["totalTask2"];
    $totalScore = $_POST["total"];

    $query_insert_result = "INSERT INTO " . $SCHEMA . ".student_result (student_name, student_id, student_number, level, 
    question_t1_1, question_t1_2, question_t1_3, question_t1_4, question_t1_5, question_t1_6, question_t1_7, question_t1_8, question_t1_9, question_t1_10,
    question_t2_1, question_t2_2, question_t2_3, question_t2_4, question_t2_5, question_t2_6, question_t2_7, question_t2_8, question_t2_9, question_t2_10, 
    question_t2_11, question_t2_12, question_t2_13, question_t2_14, question_t2_15, question_t2_16, question_t2_17, question_t2_18, question_t2_19, question_t2_20, 
    task_1_score, task_2_score, total_score) VALUES("; 
    $query_insert_result = $query_insert_result . "'" . $name . "', '" . $studentId . "', '" . $studentNumber . "', " . $level; 

    foreach($task1Score as &$score1) {
        $query_insert_result = $query_insert_result . ", " . $score1;
    }
    foreach($task2Score as &$score2) {
        $query_insert_result = $query_insert_result . ", " . $score2;
    }
    $query_insert_result = $query_insert_result . ", " . $totalScore1 . ", " . $totalScore2 . ", " . $totalScore . ")";
    
	$result = pg_query($conn, $query_insert_result);
	if (!$result) {
		echo "Query did not execute. \n";
		echo pg_last_error();
	}
	pg_close($conn);
	//セッション作成
	session_start();
	
	// $_SESSION['answer'] = array();
	// Get_UserAnsData($user_id, $link);
	
	// mb_http_output("pass");
	// //回答データテンプレートを開く
	// $obj = PHPExcel_IOFactory::createReader('Excel2007');
	// $book = $obj->load($readFile);
	// $book->setActiveSheetIndex(0);
	// $sheet = $book->getActiveSheet();
	
	// //ユーザーID設定
	// $sheet->setCellValue('D2', $user_id);
	
	// //回答データ書き込み
	// for ($i=0; $i<count($label); $i++) {
	// 	$column = $i + 3;
	// 	$sheet->setCellValueByColumnAndRow($column, 8, $_SESSION['answer'][$label[$i]]);
	// }

	// //ファイルダウンロード
	// //header('Content-Type: application/octet-stream');
	// //header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	// //header('Content-Type: application/force-download');
	// //header('Content-Type: application/vnd.ms-excel');

	// $writer = PHPExcel_IOFactory::createWriter($book, 'Excel2007');
	// $writer->save('excel/download_answer_data.xlsx');
	// //header('Pragma: public');
	// //header('Expires: 0');
	// //header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	// //header('Content-Type: application/force-download');
	// header('Content-Type: application/octet-stream');
	// //header('Content-Type: application/download');
	// //header('Content-Type: application/vnd.ms-excel');	
	// ob_end_clean();

	// header('Content-Disposition: attachment;filename="download_answer_data.xlsx"');
	// //header('Content-Transfer-Encoding: binary');
	// //header('Cache-Control: max-age=0');
	// //header('Content-Length:'.filesize($book));
	// header('Content-Length:'.filesize('excel/download_answer_data.xlsx'));
 
	// readfile('excel/download_answer_data.xlsx'); 
	//$writer->setIncludeCharts(TRUE); // ポイント！
	//$writer->save('php://output');

	//セッション解放
	session_destroy();
	
    exit;