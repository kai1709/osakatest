<?php
session_start();
$_SESSION["t_level"] = 400;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML lang="ja">

<HEAD>

  <meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

  <TITLE>Level 400 Task 1</TITLE>

  <LINK HREF="./style.css" REL="stylesheet" TYPE="text/css">

  <LINK REV="MADE" HREF="mailto:user@domain">

  <LINK REL="INDEX" HREF="./index.html">
  <STYLE>
    .def {
      color: #000066;
      background: #c0ccc0;
      font: bold large "MSPゴシック";
    }
  </STYLE>
  <script language="JavaScript">
    function MM_openBrWindow(theURL, winName, features) { //v2.0
      window.open(theURL, winName, features);
    }
    function FormCheck(Form) {
      Error = new Array();
      i = 0;
      // Q1の選択チェック
      j = 0;
      k = 0;
      while (j < Form["Q1"].length) {
        if (Form["Q1"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q1  No  answer";
        i++;
      }

      // Q2の選択チェック
      j = 0;
      k = 0;
      while (j < Form["Q2"].length) {
        if (Form["Q2"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q2  No  answer";
        i++;
      }

      // Q3の選択チェック
      j = 0;
      k = 0;
      while (j < Form["Q3"].length) {
        if (Form["Q3"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q3  No  answer";
        i++;
      }

      // Q4の選択チェック
      j = 0;
      k = 0;
      while (j < Form["Q4"].length) {
        if (Form["Q4"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q4  No  answer";
        i++;
      }

      // Q5の選択チェック
      j = 0;
      k = 0;
      while (j < Form["Q5"].length) {
        if (Form["Q5"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q5  No  answer";
        i++;
      }

      // Q6の選択チェック
      j = 0;
      k = 0;
      while (j < Form["Q6"].length) {
        if (Form["Q6"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q6  No  answer";
        i++;
      }

      // Q7の選択チェック
      j = 0;
      k = 0;
      while (j < Form["Q7"].length) {
        if (Form["Q7"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q7  No  answer";
        i++;
      }

      // Q8の選択チェック
      j = 0;
      k = 0;
      while (j < Form["Q8"].length) {
        if (Form["Q8"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q8  No  answer";
        i++;
      }

      // Q9の選択チェック
      j = 0;
      k = 0;
      while (j < Form["Q9"].length) {
        if (Form["Q9"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q9  No  answer";
        i++;
      }

      // Q10の選択チェック
      j = 0;
      k = 0;
      while (j < Form["Q10"].length) {
        if (Form["Q10"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q10  No  answer";
        i++;
      }

      // 未入力があればアラート
      if (Error.length > 0) {
        ErrorText = Error.join("\n");
        alert("unable to advance\n\n" + ErrorText);
        return false;
      }
    }
  </script>
</HEAD>

<BODY>
  <HR>

  <H1 class="center">400レベル(Level 400)</H1>
  <HR>
  <HR>


  <DIV class="center">
    <font size="4">&lt;Task 1&gt;
      <br> ＜課題１＞
      <br>
      <br>
    </font>
    <table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>Please read Q1 - Q10 below, and think carefully about your Japanese level. Choose a number between 1 (Difficult)
          and 5 (Easy), and click the button next to the number. After answering all of the questions, click the &quot;Next&quot;
          button at the bottom of the page.
          <br> You cannot advance to the next page unless you have answered all of the questions on the page
          <br> 以下のQ1～Q10までの質問について、自分の現在の日本語能力について内省してください。そして、１（難しい）～５（やさしい）までの中からひとつを選んで、横にあるボタンをクリックしてください。全部の問題に答えたら、一番下の＜Next＞ボタンをクリックしてください。
          <br> 全ての問題に答えなければ次に進むことができないので注意してください。
          <br>
        </td>
      </tr>
    </table>
    <font size="4">
      <br> Assessment(評価基準) </font>
    <br>
    <table border="1" cellpadding="0" cellspacing="0" width="686" height="49">
      <tr class="ltext">
        <td class="ltext" width="122">
          <div align="center">
            <font size="2"> Difficult
              <br> むずかしい
            </font>
          </div>
        </td>
        <td class="ltext" width="166">
          <div align="center">
            <font size="2"> Relatively difficult
              <br> ややむずかしい
            </font>
          </div>
        </td>
        <td class="ltext" width="143">
          <div align="center">
            <font size="2"> Can't tell
              <br> どちらとも言えない
            </font>
          </div>
        </td>
        <td class="ltext" width="130">
          <div align="center">
            <font size="2"> Relatively easy
              <br> やややさしい
            </font>
          </div>
        </td>
        <td class="ltext" width="113">
          <div align="center">
            <font size="2">Easy
              <br> やさしい
            </font>
          </div>
        </td>
      </tr>
      <tr align="center">
        <td class="ltext" width="122">
          <div align="center">
            <font size="2">１</font>
          </div>
        </td>
        <td class="ltext" width="166">
          <div align="center">
            <font size="2">２</font>
          </div>
        </td>
        <td class="ltext" width="143">
          <div align="center">
            <font size="2">３</font>
          </div>
        </td>
        <td class="ltext" width="130">
          <div align="center">
            <font size="2">４</font>
          </div>
        </td>
        <td class="ltext" width="113">
          <div align="center">
            <font size="2">５</font>
          </div>
        </td>
      </tr>
    </table>
    <br>
  </DIV>
  <FORM onsubmit="return FormCheck(this)" action="400_2.php" method="post">

    <DIV class="text">
      <hr>
    </DIV>
    <TABLE border="0">
      <TR>
        <TD>
          <DIV class="text"> Q.1 Can understand the following words and phrases.
            <br> 　以下の言葉の意味が理解できる。
            <br>
            <br>
          </DIV>
        </TD>
        <TD>
          <TABLE>
            <TR>
              <TD class="center">
                <DIV class="ctext">1</DIV>
                <input type="radio" name="Q1" value="1">
              </TD>
              <TD class="center">
                <DIV class="ctext">2</DIV>
                <input type="radio" name="Q1" value="2">
              </TD>
              <TD class="center">
                <DIV class="ctext">3</DIV>
                <input type="radio" name="Q1" value="3">
              </TD>
              <TD class="center">
                <DIV class="ctext">4</DIV>
                <input type="radio" name="Q1" value="4">
              </TD>
              <TD class="center">
                <DIV class="ctext">5</DIV>
                <input type="radio" name="Q1" value="5">
              </TD>
            </TR>
          </TABLE>
        </TD>
        <TR>
          <TD colspan="2">
            <DIV class="text"> 　　　 安全な国　　環境問題　　法律　　健康
              <BR> 　　　選挙　　講義　　異文化経験
              <br>
              <font size="2">正解は
                <a href="#" onClick="MM_openBrWindow('answer1.php','Q1answer','scrollbars=yes,resizable=yes,width=500,height=350')">こちら(Answer)</a>
              </font>
            </DIV>
          </TD>
        </TR>
    </TABLE>
    <br>
    <hr>
    <table border="0">
      <tr>
        <td>
          <div class="text"> Q.2　Can read the following
            <i>kanji</i> words.
            <br> 　以下の漢字語を正しく読むことができる。
            <br>
            <br>
          </div>
        </td>
        <td>
          <table>
            <tr>
              <td class="center">
                <div class="ctext">1</div>
                <input type="radio" name="Q2" value="1">
              </td>
              <td class="center">
                <div class="ctext">2</div>
                <input type="radio" name="Q2" value="2">
              </td>
              <td class="center">
                <div class="ctext">3</div>
                <input type="radio" name="Q2" value="3">
              </td>
              <td class="center">
                <div class="ctext">4</div>
                <input type="radio" name="Q2" value="4">
              </td>
              <td class="center">
                <div class="ctext">5</div>
                <input type="radio" name="Q2" value="5">
              </td>
            </tr>
          </table>
        </td>
        <tr>
          <td colspan="2">
            <div class="text"> 　　　輸入　　経済　　関係　　経験　　制度
              <br> 　　　女性　　義務　　知識　　落とす　　遅れる
              <br>
              <font size="2">正解は
                <a href="#" onClick="MM_openBrWindow('answer2.php','Q2answer','scrollbars=yes,resizable=yes,width=500,height=350')">こちら(Answer)</a>
              </font>
            </div>
          </td>
        </tr>
    </table>
    <br>
    <HR>

    <DIV class="text"> </DIV>
    <TABLE border="0">
      <TR>
        <TD>
          <DIV class="text"> Q.3　Can handle conversations with friends and conversations with professors in appropriate styles.
            <br> 　友人との会話と先生との会話を、それぞれ適切なスタイルで行うことができる。
            <br>
          </DIV>
        </TD>
        <TD>
          <TABLE>
            <TR>
              <TD class="center">
                <DIV class="ctext">1</DIV>
                <input type="radio" name="Q3" value="1">
              </TD>
              <TD class="center">
                <DIV class="ctext">2</DIV>
                <input type="radio" name="Q3" value="2">
              </TD>
              <TD class="center">
                <DIV class="ctext">3</DIV>
                <input type="radio" name="Q3" value="3">
              </TD>
              <TD class="center">
                <DIV class="ctext">4</DIV>
                <input type="radio" name="Q3" value="4">
              </TD>
              <TD class="center">
                <DIV class="ctext">5</DIV>
                <input type="radio" name="Q3" value="5">
              </TD>
            </TR>
          </TABLE>
        </TD>
        <TR>

        </TR>
    </TABLE>
    <br>
    <hr>
    <table border="0">
      <tr>
        <td>
          <div class="text"> Q.4 Can report your experience in Japanese in the way exemplified in the following passage.
            <br> 　準備をしなくても、次のような話ができる。
            <br>
          </div>
        </td>
        <td>
          <table>
            <tr>
              <td class="center">
                <div class="ctext">1</div>
                <input type="radio" name="Q4" value="1">
              </td>
              <td class="center">
                <div class="ctext">2</div>
                <input type="radio" name="Q4" value="2">
              </td>
              <td class="center">
                <div class="ctext">3</div>
                <input type="radio" name="Q4" value="3">
              </td>
              <td class="center">
                <div class="ctext">4</div>
                <input type="radio" name="Q4" value="4">
              </td>
              <td class="center">
                <div class="ctext">5</div>
                <input type="radio" name="Q4" value="5">
              </td>
            </tr>
          </table>
        </td>
        <tr>
          <td colspan="2">
            <div class="text">
              <br> 　仕事が終わって電車に乗っていると、卒業式が終わった学生が乗ってきました。これから卒業パーティーに行くようなようすでした。花束を持った学生もいたし、着物を着た女子学生もいました。みんなとても楽しそうでした。
              わたしも、去年の３月に大学を卒業しました。卒業してすぐは、友だちと電話やメールで連絡をとっていましたが、いつのまにか仕事が忙しくなってメールも来なくなりました。まだ、１年しかたっていないのに、毎日の生活はすっかり変わってしまいました。仕事はやりがいがありますが、とにかく毎日忙しくて、休みの日などは、掃除、洗濯、買い物をすませるとぐったり疲れてしまって、もう何をする気にもなれません。会社の先輩は「だれでも１年目はそんなもんだ」と言います。２年目の来年は、自分の時間や自分の生活をもう少し大切にしたいと思います。
            </div>
          </td>
        </tr>
    </table>
    <br>
    <HR>

    <DIV class="text"> </DIV>
    <table border="0">
      <tr>
        <td>
          <div class="text"> Q.5　Can roughly understand TV news or TV commentaries that deal with your topic of interest.
            <br> 　自分の興味のある話題についてのテレビのニュースや解説や論説などが概ね理解できる。
          </div>
        </td>
        <td>
          <table>
            <tr>
              <td class="center">
                <div class="ctext">1</div>
                <input type="radio" name="Q5" value="1">
              </td>
              <td class="center">
                <div class="ctext">2</div>
                <input type="radio" name="Q5" value="2">
              </td>
              <td class="center">
                <div class="ctext">3</div>
                <input type="radio" name="Q5" value="3">
              </td>
              <td class="center">
                <div class="ctext">4</div>
                <input type="radio" name="Q5" value="4">
              </td>
              <td class="center">
                <div class="ctext">5</div>
                <input type="radio" name="Q5" value="5">
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>

      </tr>
    </table>
    <br>
    <hr>
    <table border="0">
      <tr>
        <td>
          <div class="text"> Q.6 Can keep extending your talk and writing while making few grammatical or morphological errors.
            <br> 　文法や言葉を間違えることがあるが、コミュニケーションに支障を来す ことなく 話すこと・書くことがで きる。</div>
        </td>
        <td>
          <table>
            <tr>
              <td class="center">
                <div class="ctext">1</div>
                <input type="radio" name="Q6" value="1">
              </td>
              <td class="center">
                <div class="ctext">2</div>
                <input type="radio" name="Q6" value="2">
              </td>
              <td class="center">
                <div class="ctext">3</div>
                <input type="radio" name="Q6" value="3">
              </td>
              <td class="center">
                <div class="ctext">4</div>
                <input type="radio" name="Q6" value="4">
              </td>
              <td class="center">
                <div class="ctext">5</div>
                <input type="radio" name="Q6" value="5">
              </td>
            </tr>
          </table>
        </td>
    </table>
    <br>
    <hr>
    <DIV class="text"> </DIV>
    <TABLE border="0">
      <TR>
        <TD width="593">
          <DIV class="text"> Q.7 Can understand the passage given below without any difficulty.
            <br> 　 以下の文を困難なく理解することができる。
            <br>
          </DIV>
        </TD>
        <TD align="right">
          <TABLE>
            <TR>
              <TD class="center">
                <DIV class="ctext">1</DIV>
                <input type="radio" name="Q7" value="1">
              </TD>
              <TD class="center">
                <DIV class="ctext">2</DIV>
                <input type="radio" name="Q7" value="2">
              </TD>
              <TD class="center">
                <DIV class="ctext">3</DIV>
                <input type="radio" name="Q7" value="3">
              </TD>
              <TD class="center">
                <DIV class="ctext">4</DIV>
                <input type="radio" name="Q7" value="4">
              </TD>
              <TD class="center">
                <DIV class="ctext">5</DIV>
                <input type="radio" name="Q7" value="5">
              </TD>
            </TR>
          </TABLE>
        </TD>
      </TR>
      <TR>
        <TD colspan="2">
          <DIV class="text">
            <br> 　父は医者嫌いである。子どもの時から医者にはいっさい行ったことがないらしい。
            <BR> 　もちろん健康診断なども受けたことがないし、かぜを引いたりお腹が痛くなったりしても、決して医者に行くことはなく、適当なくすりですませてしまう。薬を飲んでもなかなか回復しないようなときに、母が病院に行ったらと言っても、頑として拒否するのがうちの父である。病院に行ったらむしろ病気をもらってしまうから行かないんだ、というのが父なりの病院拒否の理由であるらしい。そういう父の血を引いてか、わたしも相当の医者嫌いである。妻の目には、わたしはまったく父のように映って
            いるのであろうと想像すると、妻のことがちょっと気の毒になる。 </DIV>
        </TD>
      </TR>
    </TABLE>
    <br>
    <HR>

    <DIV class="text"> </DIV>
    <TABLE border="0">
      <TR>
        <TD>
          <DIV class="text"> Q.8 Can manage to understand texts in your major/specialty while consulting a dictionary.
            <br> 　自分の専門分野のテキストを辞書の助けを借りながら読んで、理解することができる。
            <br>
            <br>
          </DIV>
        </TD>
        <TD>
          <TABLE>
            <TR>
              <TD class="center">
                <DIV class="ctext">1</DIV>
                <input type="radio" name="Q8" value="1">
              </TD>
              <TD class="center">
                <DIV class="ctext">2</DIV>
                <input type="radio" name="Q8" value="2">
              </TD>
              <TD class="center">
                <DIV class="ctext">3</DIV>
                <input type="radio" name="Q8" value="3">
              </TD>
              <TD class="center">
                <DIV class="ctext">4</DIV>
                <input type="radio" name="Q8" value="4">
              </TD>
              <TD class="center">
                <DIV class="ctext">5</DIV>
                <input type="radio" name="Q8" value="5">
              </TD>
            </TR>
          </TABLE>
        </TD>
      </TR>
    </TABLE>
    <br>
    <hr>
    <DIV class="text"> </DIV>
    <TABLE border="0">
      <TR>
        <TD>
          <DIV class="text"> Q.9 Can write and send e-mail as exemplified below.
            <br> 　次のようなＥメールを即座に書くことができる。
            <br>
          </DIV>
        </TD>
        <TD>
          <TABLE>
            <TR>
              <TD class="center">
                <DIV class="ctext">1</DIV>
                <input type="radio" name="Q9" value="1">
              </TD>
              <TD class="center">
                <DIV class="ctext">2</DIV>
                <input type="radio" name="Q9" value="2">
              </TD>
              <TD class="center">
                <DIV class="ctext">3</DIV>
                <input type="radio" name="Q9" value="3">
              </TD>
              <TD class="center">
                <DIV class="ctext">4</DIV>
                <input type="radio" name="Q9" value="4">
              </TD>
              <TD class="center">
                <DIV class="ctext">5</DIV>
                <input type="radio" name="Q9" value="5">
              </TD>
            </TR>
          </TABLE>
        </TD>
      </TR>
      <TR>
        <TD colspan="2">
          <DIV class="text">
            <br> 日本語クラスの山田先生
            <BR> 　日本語のクラスでは、いつもお世話になっております。
            <BR> 　さて、来週の金曜日はわたしが「わたしの専門」について発表することになっていましたが、ちょっとできなくなってしまいました。
            <br> というのは、来週の金曜日にわたしの研究室に外国から２人お客さんがくることになって、先生からいっしょに案内をするようにと言われました。研究室の日本人の院生の人たちは英語を話すのがあまり得意ではないので、先生からぜひにと言われて断るわけにもいきませんでした。
            <br> 　 このような事情ですので、来週の授業は、すみませんが、休ませてください。また、発表は再来週にでもさせていただければと思います。
            <br> 　 ご迷惑をかけて申しわけありませんが、よろしくお願いします。
            <BR> 　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　ホワイト </DIV>
        </TD>
      </TR>
    </TABLE>
    <br>
    <hr>
    <table border="0">
      <tr>
        <td>
          <div class="text"> Q.10 Can manage to write a short report that communicates your observation/analysis while consulting a dictionary.
            <br> 　辞書を使いながら、簡単なレポートを趣旨がきちんと伝わるように書くことができる。
            <br>
          </div>
        </td>
        <td>
          <table>
            <tr>
              <td class="center">
                <div class="ctext">1</div>
                <input type="radio" name="Q10" value="1">
              </td>
              <td class="center">
                <div class="ctext">2</div>
                <input type="radio" name="Q10" value="2">
              </td>
              <td class="center">
                <div class="ctext">3</div>
                <input type="radio" name="Q10" value="3">
              </td>
              <td class="center">
                <div class="ctext">4</div>
                <input type="radio" name="Q10" value="4">
              </td>
              <td class="center">
                <div class="ctext">5</div>
                <input type="radio" name="Q10" value="5">
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <br>
    <HR>
    <DIV class="left">
      <INPUT type="submit" class="def" value="　　Next　　" name="submit">
    </DIV>
  </FORM>
  <HR>
  <DIV class="last"> </DIV>

</BODY>

</HTML>
