<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ja">
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

<TITLE>Level 200 Task 2</TITLE>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
<LINK REL="INDEX" HREF="./index.html">
<STYLE>
  .def {
    color: #000066;
    background: #c0ccc0;
    font: bold large "MSP鐃緒申鐃緒申鐃獣ワ申";
  }
</STYLE>
</head>

<body>
  <div class="container">
  <div class="title-index">
  <H1 class="center">200鐃緒申戰鐃?</H1>
  </div>
  <div class="center">
    <div class="margin-top-20"><span class="task-title">Task 2</span> </div>
    <br> 鐃緒申鐃緒申蝪駕申鐃?
      <br>
      <br>
    </font>
  </div>
  <br>
  <div>
      For the questions below, select the most appropriate word for the parentheses from the drug-down list on the right.
        After answering all of the questions, click the &quot;Next&quot; button at the bottom of the page.
        <br> As reloading the page will cause the questions to change, please refrain from reloading the page.
        <br> 鐃淑駕申鐃緒申文鐃塾（￥申鐃緒申鐃祝わ申鐃緒申鐃緒申鐃獣とわ申適鐃緒申鐃淑わ申鐃夙ばを、縁申端鐃緒申鐃緒申鐃緒申茲?鐃緒申鐃緒申鐃緒申鐃緒申任鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申蕁?鐃緒申鐃瞬駕申鐃塾￥申Next鐃緒申椒鐃緒申鐃薯クワ申奪鐃緒申鐃緒申討鐃緒申鐃緒申鐃緒申鐃緒申鐃?
        <br> 鐃緒申鐃縮わ申鐃緒申氷鐃緒申鐃緒申鐃夙違う鐃緒申鐃所が鐃出てわ申鐃緒申里如鐃緒申鐃緒申氷鐃緒申呂鐃緒申覆鐃緒申任鐃緒申鐃緒申鐃緒申鐃緒申鐃?
        <br>
  </div>
  <br>
  <HR>

  <FORM onsubmit="return FormCheck(this)" action="result.php" method="post">
    <input type=hidden name="NLEVEL" value="200">
    <?php
      for ($i = 1; $i < 11; $i++) {
        $id = "Q" . $i;
        print("<input type=hidden name=" . $id . " value=" . $_POST[$id] . ">\n");
      }
      mt_srand((double) (microtime() * 1000000));
      $j = 0;
      $fl = fopen("test2.csv", "r");
      while ($mdat = fgetcsv($fl, 160)) {
        for ($i = 0; $i < count($mdat); $i++) {
          $dat[$j + $i] = $mdat[$i];
        }
        $j = $j + $i;
      }
      $f = count($dat);
      fclose($fl);
      $num = 0;
      for ($i = 0; $i < 20; $i++) {
        $rnd = mt_rand(1, 5);
        $num = $num + $rnd * 6;
        $inum = $i + 11;
        for ($k = 1; $k < 6; $k++) {
          do {
            $onum[$k] = mt_rand(1, 5);
            $ckp = 0;
            for ($l = $k - 1; $l > 0; $l--) {
              if ($onum[$k] == $onum[$l]) {
                $ckp = 1;
              }
            }
          } while ($ckp > 0);
        }
        $pnum = $inum - 10;
        print("<div class='row question-div'><div class='col-sm-9'>Q." . $pnum . "<br>" . $dat[$num] . "</div><div class='col-sm-3 form-group'><select class='select-answer form-control' name=Q" . $inum++ . ">\n<option value=0> \n");
        for ($j = 1; $j < 6; $j++) {
          $opt[$onum[$j]] = "<option value=" . $j . ">" . $dat[$j + $num] . "\n";
        }
        for ($k = 1; $k < 6; $k++) {
          print($opt[$k]);
        }
        print("</select></div></div>\n");
      }
    ?>
      <HR>
      <div class="btn-next-container">
      鐃緒申鐃緒申
      <input type="submit" class="btn btn-primary" value="鐃緒申鐃緒申Next鐃緒申鐃緒申" name="submit">
    </div>
  </FORM>
  </div>
</body>

</html>
