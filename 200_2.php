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
  <FORM onsubmit="return FormCheck(this)" action="result.php" method="post">
<div class="row">
<div class="col-xs-12">
  <div class="panel panel-default ">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-6 col-md-6" style="font-size:1.2em">
          Level 200 - Task 2
        </div>
        <div class="col-xs-6 col-md-6" style="font-size:1.2em">
          200レベル - 課題２
        </div>
      </div>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-xs-6 col-md-6">
          <p>
            For the questions below, select the most appropriate word for the parentheses 
            from the drug-down list on the right. After answering all of the questions, 
            click the "Go to the Result" button at the bottom of the page. <br>
            Leave the choices of questions unselected when you do not know the answer.<br>
            As reloading the page will cause the questions to change, please refrain 
            from reloading the page.
          </p>
        </div>
        <div class="col-xs-6 col-md-6">
          <p>
            以下の文の（　　）に入るもっとも適当なことばを、右端の選択肢から一つ選んでください。
            全部の問題に答えたら、一番下の「結果を見る」のボタンをクリックしてください。<br>
            わからないときは、無理に答えないでください。<br>
            画面を再読込すると違う問題が出てくるので、再読込はしないでください。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  <br>
  <HR>

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
        print("<div class='row'><div class='col-sm-1'>Q.". $pnum . "</div><div class='col-sm-7'>" . $dat[$num] . "</div><div class='col-sm-4 form-group'><select class='select-answer form-control' name=Q" . $inum++ . ">\n<option value=0> \n");
        for ($j = 1; $j < 6; $j++) {
          $opt[$onum[$j]] = "<option value=" . $j . ">" . $dat[$j + $num] . "\n";
        }
        for ($k = 1; $k < 6; $k++) {
          print($opt[$k]);
        }
        print("</select></div></div><hr>\n");
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
