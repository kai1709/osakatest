<?php
session_start();
?>
<html>

<head>
  <title>鐃述ｏ申鐃緒申鐃緒申鐃�</title>
  <meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  <script language="JavaScript">
    function MM_callJS(jsStr) { //v2.0
      return eval(jsStr)
    }
  </script>

</head>

<body bgcolor="#FFFFFF" text="#000000" link="#666666" vlink="#666666" alink="#666666">
  <STYLE type=text/css>
    A:link {
      TEXT-DECORATION: none;
    }

    A:visited {
      TEXT-DECORATION: none;
    }

    A:active {
      TEXT-DECORATION: none;
    }

    A:hover {
      TEXT-DECORATION: underline;
    }
  </STYLE>
  <p>
    <b>
      <font size="5">Your Result</font>
    </b>
    <br>
  </p>
  <HR>
  <?php
  print("<p><b><font size=5>LEVEL " . $_POST['NLEVEL'] . "</font></b><br>");
  ?>
    <HR>
    <br>
    <DIV class="center">
      <font size="4">&lt;Task 1&gt;
        <br> 鐃緒申鐃緒申蝪縁申鐃�
        <br>
      </font>
      <table width="525" border="1" cellspacing="0" cellpadding="0">
        <tr bgcolor="#CCCCCC">
          <?php
          // Q1-Q10 PRINT
          for ($i = 1; $i < 11; $i++) {
            print("<td width=50>\n<div align=center>Q" . $i . "</div>\n</td>\n");
          }
          ?>
            <td align="center">TOTAL1</td>
        </tr>
        <tr align="center">
          <?php
            // Q1-Q10 SCORE TRANSACTION
            $total1 = 0;
            for ($i = 1; $i < 11; $i++) {
              $id = "Q" . $i;

              if ($i > 10) {
                if ($_POST[$id] == 1) {
                  $_POST[$id] = 5;
                } else {
                  $_POST[$id] = 0;
                }
              }
            // Q1-Q10 SCORE PRINT
              print("<td>" . $_POST[$id] . "</td>");

            // TOTAL1 CALCULATE
              $total1 = $total1 + $_POST[$id];
            }
            // TOTAL1 PRINT
            print("<td>" . htmlspecialchars($total1) . "</td>");

            // POST TO SERVER
            $url = "/save-result.php";
            $data = array('name' => 'Son');
            $options = array(
              'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
              ),
            );
            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            var_dump($result);
            //
            ?>
        </tr>
      </table>
      <br>
      <DIV class="center">
        <font size="4">&lt;Task 2&gt;
          <br> 鐃緒申鐃緒申蝪駕申鐃�
          <br>
        </font>
        <table width="525" border="1" cellspacing="0" cellpadding="0">
          <tr bgcolor="#CCCCCC">
            <?php
            // Q11-Q30 PRINT
            for ($i = 1; $i < 21; $i++) {
              print("<td width=50>\n<div align=center>Q" . $i . "</div>\n</td>\n");
            }
            ?>
              <td align="center">TOTAL2</td>
          </tr>
          <tr align="center">
            <?php
            // Q11-Q30 SCORE TRANSACTION
            $total2 = 0;
            for ($i = 11; $i < 31; $i++) {$id = "Q" . $i;if ($i > 10) {
            // Ancer Check (Exp. 1 is correct)
              if ($_POST[$id] == 1) {
                $_POST[$id] = 5;
              } else {
                $_POST[$id] = 0;
              }
            }
            // Q11-Q30 SCORE PRINT
              print("<td>" . $_POST[$id] . "</td>");

            // TOTAL2 CALCULATE
              $total2 = $total2 + $_POST[$id];
            }
            // TOTAL2 PRINT
            print("<td>" . htmlspecialchars($total2) . "</td>");
            ?>
          </tr>
        </TABLE>
        <br>
        <center>
          <?php
          // TOTAL1 + TOTAL2 CALCULATE
          $total = $total1 + $total2;
          // TOTAL1,TOTAL2,TOTAL SCORE PRINT
          print '<font size =6><b>';
          print '鐃緒申鐃淑わ申鐃緒申鐃緒申鐃緒申蓮鐃�<font color ="red">' . $total . '</font>鐃緒申鐃叔わ申';
          print '<br>';
          print 'Your point is <font color ="red">' . $total . '</font>';
          print '</b></font>';
          ?>
            <br>
            <br> 鐃緒申
        </center>
        <table border="0" cellspacing="0" cellpadding="0" bgcolor="#D8D8D8">
          <tr>
            <td width="30" align="center">
              <b>
                <a href="index-3.php">&lt;&lt;&lt;</a>
              </b>
            </td>
            <td>
              <a href="index-3.php">
                <b>
                  <font size="2">Go back to the Selection of Levels
                    <br> 鐃緒申戰鐃緒申鐃緒申鐃緒申鐃緒申鐃� </font>
                </b>
              </a>
            </td>
          </tr>
        </table>
        <div align="center">
          <table border="0" cellspacing="0" cellpadding="0" bgcolor="#CCCCCC">
            <tr>
              <td>
                <a href="javascript:;" onClick="javascript:window.close()">
                  <b>***close***</b>
                </a>
              </td>
            </tr>
          </table>
          <br>
        </div>
        <p>
          <br>
          <br>
</body>

</html>
