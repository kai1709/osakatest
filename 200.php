<?php
session_start();
$_SESSION["t_level"] = 200;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML lang="ja">

<HEAD>
  <meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  <TITLE>Level 200 Task 1</TITLE>
  <LINK HREF="./style.css" REL="stylesheet" TYPE="text/css">
  <LINK REL="INDEX" HREF="./index.html">
  <STYLE>
    .def {
      color: #000066;
      background: #c0ccc0;
      font: bold large "MSP鐃緒申鐃緒申鐃獣ワ申";
    }
  </STYLE>
  <script language="JavaScript">
    function MM_openBrWindow(theURL, winName, features) {
      //v2.0
      window.open(theURL, winName, features);
    }
    function FormCheck(Form) {
      Error = new Array();
      i = 0;
      // Q1鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      j = 0;
      k = 0;
      while (j < Form["Q1"].length) {
        if (Form["Q1"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q1鐃緒申No  answer";
        i++;
      }

      // Q2鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      j = 0;
      k = 0;
      while (j < Form["Q2"].length) {
        if (Form["Q2"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q2 No  answer";
        i++;
      }

      // Q3鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
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

      // Q4鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      j = 0;
      k = 0;
      while (j < Form["Q4"].length) {
        if (Form["Q4"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q4 No  answer";
        i++;
      }

      // Q5鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      j = 0;
      k = 0;
      while (j < Form["Q5"].length) {
        if (Form["Q5"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q5 No  answer";
        i++;
      }

      // Q6鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      j = 0;
      k = 0;
      while (j < Form["Q6"].length) {
        if (Form["Q6"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q6 No  answer";
        i++;
      }

      // Q7鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      j = 0;
      k = 0;
      while (j < Form["Q7"].length) {
        if (Form["Q7"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q7 No  answer";
        i++;
      }

      // Q8鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      j = 0;
      k = 0;
      while (j < Form["Q8"].length) {
        if (Form["Q8"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q8 No  answer";
        i++;
      }

      // Q9鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      j = 0;
      k = 0;
      while (j < Form["Q9"].length) {
        if (Form["Q9"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q9 No  answer";
        i++;
      }

      // Q10鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      j = 0;
      k = 0;
      while (j < Form["Q10"].length) {
        if (Form["Q10"][j].checked == true) {
          k++;
        }
        j++;
      }
      if (k == 0) {
        Error[i] = "Q10 No  answer";
        i++;
      }

      // 未鐃緒申鐃熟わ申鐃緒申鐃緒申丱鐃緒申蕁種申鐃?
      if (Error.length > 0) {
        ErrorText = Error.join("\n");
        alert("unable to advance \n\n" + ErrorText);
        return false;
      }
    }
  </script>
</HEAD>

<BODY>

  <HR>
  <H1 class="center">200鐃緒申戰鐃?(Level 200)</H1>

  <HR>
  <HR>



  <DIV class="center">
    <font size="4">&lt;Task 1&gt;
      <br> 鐃緒申鐃緒申蝪縁申鐃?
      <br>
      <br>
    </font>
    <table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>Please read Q1 - Q10 below, and think carefully about your Japanese level. Choose a number between 1 (Difficult)
          and 5 (Easy), and click the button next to the number. After answering all of the questions, click the &quot;Next&quot;
          button at the bottom of the page.
          <br> You cannot advance to the next page unless you have answered all of the questions on the page
          <br> 鐃淑駕申鐃緒申Q1鐃緒申Q10鐃殉での種申鐃緒申砲弔鐃緒申董鐃緒申鐃淑?鐃塾醐申鐃淳わ申鐃緒申鐃旬醐申能鐃熟につわ申鐃緒申鐃緒申覆鐃緒申討鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申董鐃緒申鐃緒申鐃緒申颪靴鐃緒申法鐃緒申鐃緒申覆笋居申鐃緒申鐃緒申砲泙任鐃緒申罎?鐃緒申劼箸弔鐃緒申鐃緒申鐃叔￥申鐃緒申鐃祝わ申鐃緒申椒鐃緒申鐃薯クワ申奪鐃緒申鐃緒申討鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申蕁?鐃緒申鐃瞬駕申鐃塾￥申Next鐃緒申椒鐃緒申鐃薯クワ申奪鐃緒申鐃緒申討鐃緒申鐃緒申鐃緒申鐃緒申鐃?
          <br> 鐃緒申鐃銃わ申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申覆鐃緒申鐃出種申鐃祝進むこ鐃夙わ申鐃叔わ申鐃淑わ申鐃塾わ申鐃緒申佞鐃緒申討鐃緒申鐃緒申鐃緒申鐃緒申鐃?
          <br>
        </td>
      </tr>
    </table>
    <font size="4">
      <br> Assessment(評鐃緒申鐃緒申鐃?) </font>
    <br>
    <table border="1" cellpadding="0" cellspacing="0" width="686" height="49">
      <tr class="ltext">
        <td class="ltext" width="122">
          <div align="center">
            <font size="2"> Difficult
              <br> 鐃準ず鐃緒申鐃緒申鐃緒申
            </font>
          </div>
        </td>
        <td class="ltext" width="166">
          <div align="center">
            <font size="2"> Relatively difficult
              <br> 鐃緒申鐃準ず鐃緒申鐃緒申鐃緒申
            </font>
          </div>
        </td>
        <td class="ltext" width="143">
          <div align="center">
            <font size="2"> Can't tell
              <br> 鐃宿わ申鐃緒申箸鐃緒申鐃緒申鐃淑わ申
            </font>
          </div>
        </td>
        <td class="ltext" width="130">
          <div align="center">
            <font size="2"> Relatively easy
              <br> 鐃緒申鐃巡さ鐃緒申鐃緒申
            </font>
          </div>
        </td>
        <td class="ltext" width="113">
          <div align="center">
            <font size="2">Easy
              <br> 鐃巡さ鐃緒申鐃緒申
            </font>
          </div>
        </td>
      </tr>
      <tr align="center">
        <td class="ltext" width="122">
          <div align="center">
            <font size="2">鐃緒申</font>
          </div>
        </td>
        <td class="ltext" width="166">
          <div align="center">
            <font size="2">鐃緒申</font>
          </div>
        </td>
        <td class="ltext" width="143">
          <div align="center">
            <font size="2">鐃緒申</font>
          </div>
        </td>
        <td class="ltext" width="130">
          <div align="center">
            <font size="2">鐃緒申</font>
          </div>
        </td>
        <td class="ltext" width="113">
          <div align="center">
            <font size="2">鐃緒申</font>
          </div>
        </td>
      </tr>
    </table>

    <br>
  </DIV>
  <FORM onsubmit="return FormCheck(this)" action="200_2.php" method="post">

    <DIV class="text"> </DIV>
    <hr>
    <TABLE border="0">
      <TR>
        <TD>
          <DIV class="text"> Q.1 Can read and write Hiragana or Katakana.
            <br> 鐃緒申鐃述らが鐃淑￥申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃銃わ申鐃宿み書きわ申鐃叔わ申鐃暑。
            <br>
            <br>
          </DIV>
        </TD>
        <TD align="right">
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
            <DIV class="text"> 鐃緒申 鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃遵う鐃祝ゅう鐃緒申鐃緒申鐃藷じょう鐃俊￥申鐃夙わ申鐃順か鐃藷　ばんごはん　ゆう鐃俊んきょく鐃緒申鐃曙い鐃緒申鐃緒申鐃緒申
              <br> 鐃緒申鐃緒申
              <BR> 鐃緒申鐃緒申鐃術￥申鐃夙￥申鐃緒申鐃緒申戞鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃峻ュー鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪僉鐃緒申僉鐃緒申謄鐃緒申鐃緒申鐃緒申棔鐃緒申鐃准ワ申 鐃曙ス鐃夙ワ申鐃?</DIV>
          </TD>
        </TR>
    </TABLE>
    <br>
    <hr>
    <table border="0">
      <tr>
        <td>
          <div class="text"> Q.2 Can read the following kanji words correctly.
            <br> 鐃緒申鐃淑駕申鐃塾器申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申匹爐鰹申箸鐃緒申任鐃緒申襦?
            <br>
            <br>
          </div>
        </td>
        <td>
          <img src="spacer.gif" width="50" height="8">
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
          <td colspan="3">
            <div class="text"> 鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申留鐃緒申鐃緒申鐃緒申鐃緒申族鐃緒申鐃渋縁申鐃緒申鐃熟駕申鉄鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申味
              <br> 鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申
              <font size="2">鐃緒申鐃緒申鐃?
                <a href="#" onClick="MM_openBrWindow('answer200-2.php','Q2answer','scrollbars=yes,resizable=yes,width=500,height=350')">鐃緒申鐃緒申鐃緒申(Answer)</a>
              </font>
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
          <div class="text"> Q.3 Can understand the following kanji words.
            <br> 鐃緒申 鐃淑駕申鐃塾醐申鐃春の逸申味鐃緒申鐃緒申鐃緒申任鐃緒申襦?
            <br>
            <br>
          </div>
        </td>
        <td>
          <img src="spacer.gif" width="50" height="8">
        </td>
        <td align="right">
          <table>
            <tr>
              <td class="center">
                <div class="ctext">1</div>
                <input type="radio" name="Q3" value="1">
              </td>
              <td class="center">
                <div class="ctext">2</div>
                <input type="radio" name="Q3" value="2">
              </td>
              <td class="center">
                <div class="ctext">3</div>
                <input type="radio" name="Q3" value="3">
              </td>
              <td class="center">
                <div class="ctext">4</div>
                <input type="radio" name="Q3" value="4">
              </td>
              <td class="center">
                <div class="ctext">5</div>
                <input type="radio" name="Q3" value="5">
              </td>
            </tr>
          </table>
        </td>
        <tr>
          <td colspan="3">
            <div class="text">鐃緒申鐃緒申鐃緒申鐃緒申悄鐃緒申鐃緒申鐃粛￥申鐃緒申年鐃緒申鐃緒申辧鐃緒申鐃重常申屐鐃緒申撚茵［刻申鐃?
              <br> 鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申
              <font size="2">鐃緒申鐃緒申鐃?
                <a href="#" onClick="MM_openBrWindow('answer200-3.php','Q3answer','scrollbars=yes,resizable=yes,width=500,height=350')">鐃緒申鐃緒申鐃緒申(Answer)</a>
              </font>鐃緒申
            </div>
          </td>
        </tr>
    </table>
    <br>
    <hr>
    <table border="0">
      <tr>
        <td>
          <div class="text"> Q.4 Can make simple salutations/greetings to others.
            <br> 鐃緒申鐃緒申鐃粛と駕申辰鐃緒申鐃緒申砲鐃緒申鐃緒申鐃夙わ申鐃緒申鐃緒申鐃縦わ申鐃叔わ申鐃暑。
            <br>
            <br>
          </div>
        </td>
        <td>
          <img src="spacer.gif" width="50" height="8">
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
          <td colspan="3">
            <div class="text"> Example(鐃緒申)鐃緒申
              <br> 鐃緒申鐃緒申鐃熟よう鐃緒申鐃緒申鐃緒申鐃殉わ申鐃緒申鐃緒申鐃緒申鐃熟わ申鐃準い鐃叔わ申鐃粛￥申
              <br> 鐃緒申鐃緒申鐃緒申砲鐃緒申蓮鐃緒申鐃緒申劼鐃緒申鐃緒申屬鐃叔わ申鐃粛￥申鐃緒申鐃緒申鐃緒申鐃叔わ申鐃緒申鐃緒申鐃緒申
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
          <div class="text"> Q.5 Can make simple self-introductions including your name, home country, and field of specialty.
            <br> 鐃緒申名鐃緒申鐃緒申鐃緒申鐃述￥申鐃緒申鐃緒申分鐃緒申鐃殉めた鐃緒申単鐃淑種申鐃淑紹介がでわ申鐃暑。
            <br>
            <br>
          </div>
        </td>
        <td align="right">
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
        <td colspan="2">
          <div class="text">Example(鐃緒申)鐃緒申
            <br> 鐃緒申 鐃熟わ申鐃緒申泙鐃緒申董鐃緒申鐃緒申鐃緒申悗鐃塾縁申鐃緒申鐃緒申覆鐃遵う鐃緒申鐃緒申鐃緒申鐃緒申鐃祝の￥申鐃緒申鐃夙随申鐃淑もう鐃祝わ申鐃殉わ申鐃緒申 鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申泙鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃淑わ申鐃緒申鐃緒申鐃緒申鐃瞬）で××を研居申覆鐃緒申鵑④紊?鐃緒申
            鐃緒申鐃銃わ申鐃殉わ申鐃緒申 鐃宿わ申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃淑ねわ申鐃緒申 鐃緒申鐃緒申鐃殉わ申鐃緒申</div>
        </td>
      </tr>

    </table>
    <br>
    <hr>
    <table border="0">
      <tr>
        <td width="639">
          <div class="text"> Q.6 Can provide a simple explanation of how to get from your home to school.
            <br> 鐃緒申鐃緒申鐃署かわ申鐃緒申悗泙任鐃緒申務鐃緒申鐃祝￥申砲弔鐃緒申憧鐃獣縁申鐃緒申鐃緒申鐃緒申任鐃緒申襦?
            <br>
            <br>
          </div>
        </td>
        <td align="right" width="263">
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
          <tr>
            <td colspan="2">
              <div class="text">Example(鐃緒申)鐃緒申
                <br> 鐃緒申鐃夙（わ申鐃緒申鐃祝わ申鐃緒申鐃緒申脹悄覆鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申砲泙納鐃重常申屐覆鐃緒申討鵑靴鐃祝で行わ申鐃殉わ申鐃緒申鐃緒申鐃縦（わ申鐃緒申鐃緒申鐃祝わ申鐃緒申鐃緒申鐃緒申里鐃淑わ申鐃緒申鐃緒申鐃緒申鐃祝まわ申鐃重車（でわ申
                鐃緒申鐃緒申砲望鐃淑の）わ申泙鐃緒申鐃緒申鐃緒申鐃塾わ申覆鐃緒申鐃緒申鐃緒申鐃緒申砲鐃緒申鐃緒申鐃淑わ申鐃緒申砲鐃緒申鐃緒申鐃舜わ申鐃緒申泙鐃緒申鐃緒申鐃緒申鐃瞬わ申40分鐃緒申鐃初い鐃緒申鐃緒申鐃緒申泙鐃緒申鐃?
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
          <DIV class="text"> Q.7 Can read and comprehend an easy composition about life in Japan.
            <br> 鐃緒申 1鐃緒申鐃緒申鐃緒申鐃緒申砲弔鐃緒申討笋居申鐃緒申鐃緒申鐃緒申楔鐃叔書かれた文鐃熟わ申鐃宿わ申念鐃縮ｏ申鐃緒申錣?鐃暑。
            <br>
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
          <DIV class="text"> Example(鐃緒申)鐃緒申鐃緒申</DIV>
          鐃緒申鐃緒た鐃緒申鐃緒申鐃緒申朝鐃淑まわ申鐃緒申鐃緒申鐃祝ｏ申鐃緒申鐃祝居申鐃淑わ申鐃祝わ申鐃殉わ申鐃緒申朝鐃淑わ申鐃緒申鐃祝わ申鐃俊（はわ申砲縫僖鐃夙わ申鐃殉わ申鐃夙ワ申鐃緒申鐃緒申鮨?べ￥申鐃緒申鐃緒申鐃述￥申鐃緒申鐃緒申覆痢砲澆泙鐃緒申鐃緒申鐃緒申譴?鐃緒申鐃緒申覆蓮砲鐃淳わ申鐃緒申鐃殉わ申鐃緒申鐃緒申鐃緒申鐃祝家わ申个泙鐃緒申鐃緒申箸鐃緒申鐃緒申鐃舜まわ申40分鐃緒申鐃初い鐃緒申鐃緒申鐃緒申泙鐃緒申鐃緒申鐃緒申鐃緒申鐃淑わ申鐃緒申鐃緒申鐃緒申紊?鐃祝は￥申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃夙（わ申鐃遵ぎ鐃順う鐃祝やゼ鐃淳わ申鐃緒申鐃緒申泙鐃緒申鐃緒申鐃緒申鐃淑ひわ申砲鐃緒申咫覆呂鐃祝はワ申鐃淳わ申友鐃緒申鐃緒申鐃夙わ申鐃獣わ申鐃緒申鐃緒申鐃緒申鐃緒申覆鐃緒申鐃緒申鐃緒申腓?鐃祝で随申鐃駿まわ申鐃緒申鐃緒申鐃淑わ申鐃緒申鐃祝は実醐申鐃淑わ申鐃獣わ申鐃緒申砲鬚靴泙鐃緒申鐃緒申箸鐃緒申匹鐃緒申鐃淑はわ申砲鐃緒申鐃緒申覆鐃緒申鐃緒申砲鐃緒申鐃緒申鐃盾あ鐃緒申泙鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申討鐃緒申鐃緒申鐃緒申鐃緒申鐃祝なわ申泙鐃緒申鐃緒申鐃緒申覆鐃緒申鐃緒申鐃緒申鐃緒申里如鐃緒申箸鐃緒申匹鐃緒申鐃緒申鐃宿ワ申鐃獣ワ申鐃淑どを食べまわ申鐃緒申鐃緒申鐃淑わ申鐃緒申鐃祝わ申剖鐃淑わ申鐃緒申鐃祝わ申鐃塾随申堂鐃淑わ申鐃順く鐃宿わ申鐃祝わ申鐃春（ばわ申砲鐃緒申咫覆呂鐃祝を食べまわ申鐃緒申
          10鐃緒申半鐃緒申鐃緒申鐃緒申鐃緒申鐃祝居申鐃淑わ申鐃緒申鐃祝わ申泙鐃緒申鐃緒申鐃緒申譴?鐃初シ鐃緒申錙種申鬚△咾董鐃緒申謄鐃俊のニュー鐃緒申鐃薯見まわ申鐃緒申鐃緒申覆鐃緒申砲鐃?12鐃緒申鐃殉でに随申鐃淑ね）わ申茲?鐃祝わ申鐃銃わ申鐃殉わ申鐃緒申鐃緒申鐃旬でわ申鐃緒申鐃緒申覆鐃緒申鐃緒申鐃緒申帖砲鐃緒申鐃緒申僉覆鐃緒申鐃緒申悗鐃祝でわ申鐃緒申
        </TD>
      </TR>
    </TABLE>
    <br>
    <hr>
    <DIV class="text"> </DIV>
    <TABLE border="0">
      <TR>
        <TD>
          <DIV class="text"> Q.8 Can make proper use of the past tense to give a simple explanation of your personal history in your home country.
            <br> 鐃緒申鐃緒申鐃叔の件申鐃緒申砲弔鐃緒申董鐃重?鐃准な駕申鐃緒申鐃緒申鐃緒申表鐃緒申鐃祝わ申辰憧鐃獣縁申鐃緒申鐃緒申鐃緒申任鐃緒申襦?
            <br> 鐃緒申鐃緒申鐃緒申
            <br>
          </DIV>
        </TD>
        <TD align="right">
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
      <TD colspan="2">
        <DIV class="text"> Example(鐃緒申)鐃緒申
          <br> 鐃緒申鐃緒た鐃緒申鐃熟￥申鐃緒申鐃緒申年鐃祝刻申鐃緒申鐃舜わ申卒鐃夙（わ申鐃縦わ申鐃順う鐃祝わ申鐃殉わ申鐃緒申鐃緒申鐃緒申鐃緒申鐃銃￥申鐃緒申年鐃瞬ワ申鐃緒申團紂? 鐃緒申鐃塾駕申辧覆鐃緒申鐃緒申鐃緒申鐃祝に勤（つと）わ申討鐃緒申泙鐃緒申鐃緒申鐃緒申鐃緒申里鐃緒申函鐃緒申鐃舜縁申鐃緒申鐃緒申鐃獣て￥申鐃粛ットワー鐃緒申鐃薯研居申覆鐃緒申鵑④紊?鐃祝わ申鐃殉わ申鐃緒申鐃緒申鐃殉ワ申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃淑わ申鐃祝わ申辰鐃緒申鐃淑わ申鐃夙）￥申鐃緒申悗鐃緒申鐃緒申鐃緒申砲覆鐃殉わ申鐃緒申鐃緒申鐃緒申年鐃緒申鐃緒申鐃緒申鐃薯してわ申鐃殉わ申鐃緒申鐃緒申鐃緒申鐃緒申鐃旬でわ申辰噺鐃緒申鐃淑わ申鐃藷きゅう鐃祝わ申鐃緒申鐃緒申鐃夙思わ申鐃処う鐃祝なわ申泙鐃緒申鐃緒申鐃緒申鐃緒申鐃叔￥申鐃緒申鐃旬わ申留鐃舜（わ申紊?鐃緒申鐃緒申鐃祝わ申鐃暑こ鐃夙にわ申鐃殉わ申鐃緒申鐃緒申</DIV>
      </TD>

    </TABLE>
    <br>
    <HR>

    <DIV class="text"> </DIV>
    <TABLE border="0">
      <TR>
        <TD>
          <DIV class="text"> Q.9 Can explain what you want to do after graduating from the university.
            <br> 鐃緒申 鐃緒申悗鐃緒申拔鐃緒申鐃緒申鐃緒申絏随申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申単鐃緒申鐃緒申鐃緒申鐃叔わ申鐃暑。
            <br>
            <br>
          </DIV>
        </TD>
        <TD align="right">
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
          <DIV class="text"> Example(鐃緒申)鐃緒申
            <br> 鐃緒申鐃緒申鐃緒申鐃緒た鐃緒申鐃緒申鐃緒申鐃旬わ申IP鐃緒申鐃獣（でわ申鐃祝につわ申鐃銃醐申鐃緒申覆鐃緒申鵑④紊?鐃祝わ申鐃銃わ申鐃殉わ申鐃緒申鐃緒申旅鐃淑はわ申鐃緒申鐃緒申鐃緒申鐃祝わ申鐃淑と）っわ申鐃緒申鐃祝居申鐃淑わ申鐃緒申鐃祝りた鐃緒申鐃夙思ってわ申鐃殉わ申鐃緒申鐃緒申悗鐃緒申鐃緒申鐃緒申砲覆襪?鐃緒申鐃緒申辧覆鐃緒申鐃緒申鐃緒申鐃祝わ申鐃緒申鐃淑はわ申鐃祝るか鐃緒申鐃殉わ申鐃緒申覆鐃緒申砲鐃銃わ申鐃殉わ申鐃藷。でも、鐃淳わ申覆鐃緒申造鐃?IP鐃緒申鐃獣（でわ申鐃祝わ申鐃夙（つわ申鐃祝わ申鐃緒申茲?鐃祝わ申鐃緒申鐃緒申鐃夙考（わ申鐃藷が）わ申鐃銃わ申鐃殉わ申鐃緒申
          </DIV>
        </TD>
      </TR>
    </TABLE>
    <br>
    <hr>
    <table border="0">
      <tr>
        <td>
          <div class="text"> Q.10 Can provide easy-to-understand explanations to professors by e-mail when it is necessary to be absent from
            class.
            <br> 鐃緒申鐃緒申鐃緒申鐃夙やゼ鐃淳わ申戮泙覆鐃緒申鐃出なわ申覆鐃緒申鐃順、鐃緒申鐃塾わ申鐃夙わ申 鐃緒か鐃緒申笋刻申鐃緒申鐃緒申鐃緒申鐃緒申烹泥瓠種申鐃緒申鐃緒申鐃緒申鐃暑こ鐃夙わ申鐃叔わ申鐃暑。
            <br>
            <br>
          </div>
        </td>
        <td align="right">
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
      <td colspan="2">
        <div class="text"> Example(鐃緒申)鐃緒申
          <br> 鐃緒申鐃緒申鐃緒申鐃緒申鐃淑わ申鐃緒申茲?鐃俊）のｏ申鐃緒申鐃緒申鐃旬（わ申鐃緒申鐃緒申鐃祝のワ申鐃淳に出てわ申鐃緒申鐃緒申鐃緒申任鐃緒申鐃? 鐃緒申鐃縦は￥申鐃緒申鐃緒申鐃緒申劼鐃緒申鐃? 鐃緒申鐃殉わ申鐃殉わ申鐃緒申鐃緒申頭鐃淑わ申鐃緒申鐃殉）わ申鐃緒申鐃緒申鐃緒申鐃緒申熱鐃淑ねつ）もあ鐃緒申泙鐃緒申鐃緒申鐃緒申澆泙鐃緒申鵑?￥申鐃緒申鐃淳わ申戮澆鐃緒申鐃緒申隼廚辰討鐃緒申泙鐃緒申鐃緒申匹鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申覆佑鐃緒申砲鐃緒申鐃緒申泙鐃緒申鐃?</div>
      </td>
    </table>
    <br>
    <HR>
    <DIV class="left">鐃緒申鐃緒申
      <input type="submit" class="def" value="鐃緒申鐃緒申Next鐃緒申鐃緒申" name="submit">
    </DIV>
  </FORM>
  <HR>
  <font color="#8EAACC"></font>
  <DIV class="last"> </DIV>

</BODY>

</HTML>
