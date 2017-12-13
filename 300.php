<?php
session_start();
$_SESSION["t_level"] = 300;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML lang="ja">

<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset="euc-jp">
<TITLE>Level 300 Task 1</TITLE>
<LINK HREF="./style.css" REL="stylesheet" TYPE="text/css">
<LINK REV="MADE" HREF="mailto:user@domain">
<LINK REL="INDEX" HREF="./index.html">
<STYLE>
<!--
.def{color:#000066;background:#c0ccc0;font:bold large "MSPゴシック";}
-->
</STYLE>
<script language="JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
window.open(theURL,winName,features);
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
alert ("unable to advance \n\n"+ErrorText);
return false;
}
}
//-->
</script>
</HEAD>

<BODY>

<HR>

<H1 class="center">300レベル(Level 300)</H1>

<HR>
<HR>


<DIV  class="center"><font size="4">&lt;Task 1&gt;<br>
  ＜課題１＞<br>
  <br>
  </font> 
  <table width="750" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td>Please read Q1 - Q10 below, and think carefully about your Japanese 
        level. Choose a number between 1 (Difficult) and 5 (Easy), and click the 
        button next to the number. After answering all of the questions, click 
        the &quot;Next&quot; button at the bottom of the page. <br>
        You cannot advance to the next page unless you have answered all of the 
        questions on the page<br>
        以下のQ1〜Q10までの質問について、自分の現在の日本語能力について内省してください。そして、１（難しい）〜５（やさしい）までの中からひとつを選んで、横にあるボタンをクリックしてください。全部の問題に答えたら、一番下の＜Next＞ボタンをクリックしてください。<br>
        全ての問題に答えなければ次に進むことができないので注意してください。<br>
      </td>
    </tr>
  </table>
  <font size="4"><br>
  Assessment(評価基準) </font><br>
  <table border="1" cellpadding="0" cellspacing="0" width="686" height="49">
    <tr class="ltext"> 
      <td class="ltext" width="122"> 
        <div align="center"><font size="2"> Difficult<br>
          むずかしい</font></div>
      </td>
      <td class="ltext" width="166"> 
        <div align="center"><font size="2"> Relatively difficult<br>
          ややむずかしい</font></div>
      </td>
      <td class="ltext" width="143"> 
        <div align="center"><font size="2"> Can't tell <br>
          どちらとも言えない</font></div>
      </td>
      <td class="ltext" width="130"> 
        <div align="center"><font size="2"> Relatively easy<br>
          やややさしい</font></div>
      </td>
      <td class="ltext" width="113"> 
        <div align="center"><font size="2">Easy<br>
          やさしい</font></div>
      </td>
    </tr>
    <tr align="center"> 
      <td class="ltext" width="122"> 
        <div align="center"><font size="2">１</font></div>
      </td>
      <td class="ltext" width="166"> 
        <div align="center"><font size="2">２</font></div>
      </td>
      <td class="ltext" width="143"> 
        <div align="center"><font size="2">３</font></div>
      </td>
      <td class="ltext" width="130"> 
        <div align="center"><font size="2">４</font></div>
      </td>
      <td class="ltext" width="113"> 
        <div align="center"><font size="2">５</font></div>
      </td>
    </tr>
  </table>
  <br>
</DIV>
<FORM onsubmit="return FormCheck(this)" action="300_2.php" method="post">

  <DIV class="text"></DIV>
  <hr>
  <TABLE border="0">
    <TR> 
      <TD> 
        <DIV class="text"> Q.1 Can read the following kanji words correctly.<br>
          　つぎのような漢字が読める。<br>
        </DIV>
      </TD>
      <TD><img src="spacer.gif" width="50" height="8"></TD>
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
      <TD colspan="3"> 
        <DIV class="text"> <br>
          Example(例)： <br>
          　　　 空港　　注意　　教育　　産業　　試験　　大使館　　計画　　<br>
          　　　　　　　　　　　　　　　　　　　　　　　　　<font size="2">正解は<a href="#" onClick="MM_openBrWindow('answer300-1.php','Q1answer','scrollbars=yes,resizable=yes,width=500,height=350')">こちら(Answer)</a></font></DIV>
      </TD>
    </TR>
  </TABLE>  
  <br>
  <hr>
  <table border="0">
    <tr> 
      <td> 
        <div class="text"> Q.2 Can understand the following kanji words. <br>
          　つぎの言葉の意味がわかる。<br>
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
        <div class="text"> <br>
          Example(例)：<br>
          　　　 電子メール　　１時間以内　　特別の　　研究　　自然科学　　利用する　　世界　　<br>
          　　　　　　　　　　　　　　　　　　　　　　　　　<font size="2">正解は<a href="#" onClick="MM_openBrWindow('answer300-2.php','Q2answer','scrollbars=yes,resizable=yes,width=550,height=350')">こちら(Answer)</a></font></div>
      </td>
    </tr>
  </table>
  <br>
  <HR>

  <DIV class="text"> </DIV>
  <TABLE border="0">
    <TR> 
      <TD> 
        <DIV class="text"> Q.3 Can easily make explanations concerning such matters 
          as your chosen field and personal history.<br>
          　自分の専門分野（せんもんぶんや）や経歴（けいれき） についてわかりやすく説明することができる。</DIV>
      </TD>
      <TD><img src="spacer.gif" width="50" height="8"></TD>
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
    <TR> </TR>
  </TABLE>
  <br>
  <hr>
  <table border="0">
    <tr> 
      <td> 
        <div class="text"> Q.4 Can conduct a conversation about your daily habits 
          and interests.<br>
          　自分の日常生活（にちじょうせいかつ）や趣味（しゅみ）について、簡単（かんたん）な会話ができる　　</div>
      </td>
      <td><img src="spacer.gif" width="50" height="8"></td>
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
  </table>
  <br>
  <HR>

  <DIV class="text"> </DIV>
  <table border="0">
    <tr> 
      <td> 
        <div class="text"> Q.5 While asking others to adjust their rate of speech, 
          can make yourself understood without significant problems when making 
          introductions and salutations, as well as when undertaking matters of 
          formality and procedure for university offices.<br>
          　大学生活におけるあいさつや事務手続き（じむてつづき）などの場面（ばめん）で、相手に話す速度（そくど）を調節（ちょうせつ） してもらいながら、あまり大きな問題なく意思疎通（いしそつう）ができる。</div>
      </td>
      <td><img src="spacer.gif" width="50" height="8"></td>
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
    <tr> </tr>
  </table>
  <br>
  <hr>
  <table border="0">
    <tr> 
      <td> 
        <div class="text"> Q.6 Can correctly conjugate verbs to form the following 
          types: &quot;te&quot; form, forms of potential and possibility, passive 
          forms, and causative forms.<br>
          　動詞の「て形」、可能形（かのうけい）、受け身形（うけみけい）使役形（しえきけい）がわかり、それぞれの活用形（かつようけい）を作ることができる。<br>
          <br>
        </div>
      </td>
      <td><img src="spacer.gif" width="50" height="8"></td>
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
    <tr> 
      <td colspan="3">Example(例)：<br>
        　　　書く⇒書いて　書く⇒書ける　書く⇒書かれる　書く⇒書かせる<br>
        　　　作る⇒作って　作る⇒作れる　作る⇒作られる　作る⇒作らせる<br>
        　　　する⇒して　する⇒できる　する⇒される　する⇒させる<br>
      </td>
  </table>
  <br>
  <HR>

  <DIV class="text"> </DIV>
  <TABLE border="0" width="752">
    <TR> 
      <TD> 
        <DIV class="text"> Q.7 Can make and use the conditional forms of verbs.<br>
          　条件形（じょうけんけい）の「・・・たら」「・・・（れ）ば」「・・・と」 「・・・なら」の作り方と使い方がわかる。<br>
          <br>
        </DIV>
      </TD>
      <TD><img src="spacer.gif" width="50" height="8"></TD>
      <TD> 
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
      <TD colspan="3"> 
        <DIV class="text"> Example(例)：<br>
          　　　 やくす　⇒　やくしたら、やくせば、やくすと、やくすなら<br>
          <br>
          Example(例)：<br>
          　　 　「よく寝（ね）<u>たら</u>、かぜがなおりました」<br>
          　　 　「この方法でさらに分析（ぶんせき）す<u>れば</u>よい」<br>
          　　　 「温度（おんど）が上（あ）がる<u>と</u>、ウイルスの数（かず）が増加（ぞうか）した」<br>
          　　　 「冬に京都（きょうと）へ行く<u>なら</u>、どこがいいか、教えてもらえませんか」</DIV>
      </TD>
    </TR>
  </TABLE>
  <br>
  <HR>

  <DIV class="text"> </DIV>
  <TABLE border="0">
    <TR> 
      <TD> 
        <DIV class="text"> Q.8 Can read and grasp the point of explanations, essays, 
          and other simple works.<br>
          　簡単（かんたん）な説明文やエッセイを読んで大意をつかむことができる。　　<br>
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
    <TR> 
      <TD colspan="2">Example(例)：<br>
        　異文化（いぶんか）を理解（りかい）することには、さまざまな意義（いぎ）があると思われる。自文化（じぶんか）にはないものを見つけ、新（あら）たなものの考え方や視点（してん）に気づくこともある。自文化にないものの発見（はっけん）は、カルチャーショックを引き起こすこともあるが、それを乗（の）り越（こ）えようとする過程（かてい）において、人は成長（せいちょう）することが十分に可能（かのう）である。また、異文化（いぶんか）の理解（りかい）は、未知（みち）のものに接（せっ）してそれ自体（じたい）を知ることに加（くわ）え、自文化についてあらためて考え直（なお）す機会（きかい）も提供（ていきょう）する。異文化（いぶんか）との比較（ひかく）により、自文化を客観的（きゃっかんてき）にとらえることができ、自文化にある価値（かち）を見直すこともあり得（う）ると考えられる。 
      </TD>
    </TR>
  </TABLE>
  <br>
  <HR>

  <DIV class="text"> </DIV>
  <TABLE border="0">
    <TR> 
      <TD width="639"> 
        <DIV class="text"> Q.9 Can submit simple reports and make contact with 
          professors and university instructors by e-mail. <br>
          　大学の先生にEメールで簡単（かんたん）な報告（ほうこく）や連絡（れんらく）をすることができる。 　<br>
          <br>
        </DIV>
      </TD>
      <TD align="right" width="208"> 
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
        <DIV class="text"> Example(例)：<br>
          　△△研究科（けんきゅうか）博士前期課程（はかせぜんきかてい）の○○です。<br>
          　先日（せんじつ）、先生にご相談した研究について少し報告（ほうこく）します。調査方法について、図書館で本や雑誌をさがしました。その結果（けっか）、「○○○○」という本が見つかりました。今、その本を読んでいます。その本はわかりやすいので、私の研究に役に立つと思います。来月のゼミの日までに調査方法について考えて、もう少しくわしく決めたいと思います。<br>
          　来月のゼミではまたよろしくお願いします。</DIV>
      </TD>
    </TR>
  </TABLE>  
  <br>
  <hr>
  <table border="0">
    <tr> 
      <td> 
        <div class="text"> Q.10 Can differentiate between the Japanese used in 
          oral presentations (polite style) and that used in written reports (plain 
          style), and write a short report in Japanese.<br>
          　発表（はっぴょう）の時の日本語（丁寧体（ていねいたい）：polite style）とレポートを書く時の日本語（普通体（ふつうたい）：plain 
          style）を区別（くべつ） して、短いレポートを書くことができる。<br>
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
    <tr> 
      <td colspan="2">Example(例)：<br>
        　（発表の時）<br>
        　 大阪は食べものがおいしいことで<u>有名です</u>。大阪の食べものには、<u>どんな</u>特徴がある<u>でしょうか</u>。また、安くておいしいお店が多いと<u>言われます</u>が、大阪の人は<u>どんな</u>お店によく行くの<u>でしょうか</u>。私は、大阪の食文化について<u>調べてみました</u>。<br>
        　<br>
        　（レポートの時）<br>
        　 大阪は食べものがおいしいことで<u>有名である</u>。大阪の食べものには、<u>どのような</u> 特徴がある<u>だろうか</u>。また、安くておいしいお店が多いと<u>言われるが</u>、大阪の人は<u>どのような</u>お店によく行くの<u>であろうか</u>。私は、大阪の食文化について<u>調べてみた</u>。</td>
    </tr>
  </table>
  <br>
  <HR>
  <DIV class="left"> 　　 
    <INPUT type="submit" class="def"  value="　　Next　　">
</DIV>
</FORM>
<HR>
<DIV class="last"> </DIV>

</BODY>

</HTML>

