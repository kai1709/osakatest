<?php
session_start();
?>
<html>

<head>
  <title>鐃述ｏ申鐃緒申鐃緒申鐃�</title>
  <meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  <script language="JavaScript">
    function MM_callJS(jsStr) { //v2.0
      return eval(jsStr)
    }
  </script>

</head>

<body bgcolor="#FFFFFF" text="#000000" link="#666666" vlink="#666666" alink="#666666">
<STYLE type=text/css>

</STYLE>
<div class="container" style="padding-top: 100px">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <?php
                    $level = $_POST['NLEVEL'];
                    print("Your Result - Level - " . "<span id='current-level'>". $_POST['NLEVEL']. '</span>');
                ?>
            </h4>
        </div>
    <div class="panel-body">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>
                                <?php
                                    for ($i = 0; $i < 20; $i++) {
                                        print("<th class='info text-center'>" . "Q" . ($i + 1) . "</th>" );
                                    }
                                ?>
                                <th class="success text-center">Total</th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">Task 1</td>
                            <?php
                                $total1 = 0;
                                $scoreTask1 = [];
                                for ($i = 1; $i < 11; $i++) {
                                    $id = "Q" . $i;
                                    if ($i > 10) {
                                        if ($_POST[$id] == 1) {
                                            $_POST[$id] = 5;
                                        } else {
                                            $_POST[$id] = 0;
                                        }
                                    }
                                    array_push($scoreTask1, $_POST[$id]);
                                // Q1-Q10 SCORE PRINT
                                    print("<td><div class='text-right'>" . $_POST[$id] . "</div></td>");
                                
                                // TOTAL1 CALCULATE
                                    $total1 = $total1 + $_POST[$id];
                                }
                                
                                print("<td colspan='10' class='active'></td>");
                                // TOTAL1 PRINT
                                print("<td><div class='text-right'>" . htmlspecialchars($total1) . "</div></td>");
                            ?>
                        </tr>
                        <tr>
                            <td class="text-center">Task 2</td>
                            <?php
                                $total2 = 0;
                                $scoreTask2 = [];
                                for ($i = 11; $i < 31; $i++) {$id = "Q" . $i;if ($i > 10) {
                                
                                // Ancer Check (Exp. 1 is correct)
                                    if ($_POST[$id] == 1) {
                                        $_POST[$id] = 5;
                                    } else {
                                        $_POST[$id] = 0;
                                    }
                                
                                }
                                
                                // Q11-Q30 SCORE PRINT
                                    print("<td><div class='text-right'>" . $_POST[$id] . "</div></td>");
                                
                                // TOTAL2 CALCULATE
                                    $total2 = $total2 + $_POST[$id];
                                    array_push($scoreTask2, $_POST[$id]);
                                }
                                
                                // TOTAL1 PRINT
                                print("<td><div class='text-right'>" . htmlspecialchars($total2) . "</div></td>");
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="row">
                    <div class="col-xs-6 col-md-6" style="padding: 30px">
                        <h4>
                        <?php
                            // TOTAL1 + TOTAL2 CALCULATE
                            $total = $total1 + $total2;
                            print("Your point is " . $total);
                        ?>
                        </h4>
                        <p>
                            Those with a score between 1 - 150 should raise the level of the test, and take the level check test again.
                        </p>
                    </div>
                    <div class="col-xs-6 col-md-6" style="padding: 30px">
                        <h4>
                            あなたの点数は0点です。
                        </h4>
                        <p>
                            合計点が1～150の人は更に上のレベルでチェックテストをしてみましょう。
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                        <a class="btn btn-primary btn-lg center-block" href="select_level.php" role="button">Next (Level-100)</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="POST" action="/student_save_result.php" target="brank">
                            <div class="form-group">
                                <label for="student_name">Name: </label>
                                <input type="text" class="form-control" id="student_name" name="student_name" required/>
                            </div>
                            <div class="form-group">
                                <label for="student_number">Student number: </label>
                                <input type="text" class="form-control" id="student_number" name="student_number" required />

                            </div>
                            <?php
                                // TOTAL1 + TOTAL2 CALCULATE
                                $total = $total1 + $total2;

                                // POST TO SERVER
                                $url = "http://localhost:8888/save-result.php";
                                $data = array(
                                    'level' => $level,
                                    'scoreTask1' => $scoreTask1,
                                    'scoreTask2' => $scoreTask2,
                                    'totalTask1' => $total1,
                                    'totalTask2' => $total2,
                                    'total' => $total,
                                );

                                $query_url = http_build_query($data, 'flags_');
                                //open connection
                                $ch = curl_init();

                                //set the url, number of POST vars, POST data
                                $ch = curl_init($url);
                                curl_setopt($ch, CURLOPT_POST, 1);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $query_url);
                                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                                curl_setopt($ch, CURLOPT_HEADER, 0);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                                //execute post
                                $result = curl_exec($ch);
                                print('<input id="result-id" name="result_id" class="hidden" value="' .$result . '"/>');
                                //close connection
                                curl_close($ch);
                                //
                                ?>
                            <button class="btn btn-primary pull-right" type="submit">Print as PDF</button>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <p>
                            Please bring the hard copy of PDF, when you come to the first class.<br>
                            Your class level will be determined by not only this score but also the judgement of teachers. Please follow teacher’s order.
                        </p>
                        <br>
                        <p>
                            PDFを印刷したものを、最初のクラスにもってきてください。<br>
                            あなたにふさわしいクラスは、このチェックだけでなく、各クラスの教師と相談の上決定します。教師の指示に従ってください。
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
  
  
  
  
  
  
  
  
  
  
  </div>
  </div>
</body>

</html>
