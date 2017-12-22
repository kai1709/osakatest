<?php
session_start();
$_SESSION["t_level"] = 200;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  <title>Level 200 Task 1</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
  <!-- <LINK HREF="./style.css" REL="stylesheet" TYPE="text/css"> -->
  <LINK REL="INDEX" HREF="./index.html">
  <style>
    .def {
      color: #000066;
      background: #c0ccc0;
      font: bold large "MSP鐃緒申鐃緒申鐃獣ワ申";
    }
  </style>
  <script language="JavaScript">
    function MM_openBrWindow(theURL, winName, features) {
      //v2.0
      window.open(theURL, winName, features);
    }
    function checkQuestionChecked(question) {
      var x = 0;
      while (x < question.length) {
        if (question[x].checked == true) return true;
        x++;
      }
      return false;
    }
    function FormCheck(Form) {
      for (var i = 1; i < 11; i++) {
        var question = "Q" + i;
        if (!checkQuestionChecked(Form[question])) {
          alert("Question " + i + " no answer.");
          return false;
        }
        if (i == 10) {
          return true;
        }
      }
      // Error = new Array();
      // i = 0;
      // // Q1鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      // j = 0;
      // k = 0;
      
      // while (j < Form["Q1"].length) {
      //   if (Form["Q1"][j].checked == true) {
      //     k++;
      //   }
      //   j++;
      // }
      // if (k == 0) {
      //   Error[i] = "Q1鐃緒申No  answer";
      //   i++;
      // }

      // // Q2鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      // j = 0;
      // k = 0;
      // while (j < Form["Q2"].length) {
      //   if (Form["Q2"][j].checked == true) {
      //     k++;
      //   }
      //   j++;
      // }
      // if (k == 0) {
      //   Error[i] = "Q2 No  answer";
      //   i++;
      // }

      // // Q3鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      // j = 0;
      // k = 0;
      // while (j < Form["Q3"].length) {
      //   if (Form["Q3"][j].checked == true) {
      //     k++;
      //   }
      //   j++;
      // }
      // if (k == 0) {
      //   Error[i] = "Q3  No  answer";
      //   i++;
      // }

      // // Q4鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      // j = 0;
      // k = 0;
      // while (j < Form["Q4"].length) {
      //   if (Form["Q4"][j].checked == true) {
      //     k++;
      //   }
      //   j++;
      // }
      // if (k == 0) {
      //   Error[i] = "Q4 No  answer";
      //   i++;
      // }

      // // Q5鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      // j = 0;
      // k = 0;
      // while (j < Form["Q5"].length) {
      //   if (Form["Q5"][j].checked == true) {
      //     k++;
      //   }
      //   j++;
      // }
      // if (k == 0) {
      //   Error[i] = "Q5 No  answer";
      //   i++;
      // }

      // // Q6鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      // j = 0;
      // k = 0;
      // while (j < Form["Q6"].length) {
      //   if (Form["Q6"][j].checked == true) {
      //     k++;
      //   }
      //   j++;
      // }
      // if (k == 0) {
      //   Error[i] = "Q6 No  answer";
      //   i++;
      // }

      // // Q7鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      // j = 0;
      // k = 0;
      // while (j < Form["Q7"].length) {
      //   if (Form["Q7"][j].checked == true) {
      //     k++;
      //   }
      //   j++;
      // }
      // if (k == 0) {
      //   Error[i] = "Q7 No  answer";
      //   i++;
      // }

      // // Q8鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      // j = 0;
      // k = 0;
      // while (j < Form["Q8"].length) {
      //   if (Form["Q8"][j].checked == true) {
      //     k++;
      //   }
      //   j++;
      // }
      // if (k == 0) {
      //   Error[i] = "Q8 No  answer";
      //   i++;
      // }

      // // Q9鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      // j = 0;
      // k = 0;
      // while (j < Form["Q9"].length) {
      //   if (Form["Q9"][j].checked == true) {
      //     k++;
      //   }
      //   j++;
      // }
      // if (k == 0) {
      //   Error[i] = "Q9 No  answer";
      //   i++;
      // }

      // // Q10鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪鐃?
      // j = 0;
      // k = 0;
      // while (j < Form["Q10"].length) {
      //   if (Form["Q10"][j].checked == true) {
      //     k++;
      //   }
      //   j++;
      // }
      // if (k == 0) {
      //   Error[i] = "Q10 No  answer";
      //   i++;
      // }
      // console.log(Error);
      // return false;

      // // 未鐃緒申鐃熟わ申鐃緒申鐃緒申丱鐃緒申蕁種申鐃?
      // if (Error.length > 0) {
      //   ErrorText = Error.join("\n");
      //   alert("unable to advance \n\n" + ErrorText);
      //   return false;
      // }
    }
  </script>
</head>

<body>
  <div class="container">
  <form onsubmit="return FormCheck(this);" action="200_2.php" method="post">
<div class="row">
<div class="col-md-12">
  <div class="panel panel-default ">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-6 col-md-6" style="font-size:1.2em">
          Level 200 - Task 1
        </div>
        <div class="col-xs-6 col-md-6" style="font-size:1.2em">
          200レベル - 課題１
        </div>
      </div>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-xs-6 col-md-6">
          <p>
            Please read Q1 - Q10 below, and think carefully about your Japanese level.
            Choose a number between 1 (Difficult) and 5 (Easy), and click the button next to the number.
            After answering all of the questions, click the "Go to the next question" button at the bottom of the page. <br>
            Leave the choices of questions unselected when you do not know the answer.
          </p>
        </div>
        <div class="col-xs-6 col-md-6">
          <p>
            以下のQ1～Q10までの質問について、自分の現在の日本語能力について内省してください。
            そして、１（難しい）～５（やさしい）までの中からひとつを選んで、横にあるボタンをクリックしてください。
            全部の問題に答えたら、一番下の「次の課題へ」のボタンをクリックしてください。<br>
            わからないときは、無理に答えないでください。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <hr>
																<div class="row">
						<div class="col-xs-2 col-md-1" style="font-size:1.2em">Q1.</div>
						<div class="col-xs-10 col-md-3">
							<p>Can read and write Hiragana or Katakana.</p>
							<br>
							<p>ひらがな・カタカナ全ての読み書きができる。</p>
						</div>
						<div class="col-xs-12 col-md-4">
							いそがしい　ぎゅうにゅう　たんじょうび　としょかん　ばんごはん　ゆうびんきょく　れいぞうこ<br> アパート　エレベーター　コンピューター　スリッパ　パーティー　ボールペン　 レストラン													</div>
						<div class="col-xs-12 col-md-4">
							<div class="your_answer">
								<label class="radio-inline">
									<input type="radio" name="Q1" value="1" required=""> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q1" value="2" required=""> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q1" value="3" required=""> 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q1" value="4" required=""> 4
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q1" value="5" required=""> 5
								</label>
							</div>
						</div>
					</div>
					<hr>
																<div class="row">
						<div class="col-xs-2 col-md-1" style="font-size:1.2em">Q2.</div>
						<div class="col-xs-10 col-md-3">
							<p>Can read the following kanji words correctly.</p>
							<br>
							<p>以下の漢字語を正しく読むことができる。</p>
						</div>
						<div class="col-xs-12 col-md-4">
							先生　留学生　家族　病院　地下鉄　教室　意味														<br><a href="#" role="button" class="btn btn-info btn-xs pull-left" style="margin-top:3%;" data-toggle="collapse" data-target="#answer2">正解を表示(Answer)</a>
							<div id="answer2" class="collapse" style="margin-top:10%">
								<div class="well well-sm">
									Correct readings<br> <br> 先生・・・せんせい　　 留学生・・・りゅうがくせい　<br> 　<br> 家族・・・かぞく　　　　 病院・・・びょういん　　<br> <br> 地下鉄・・・ちかてつ　 教室・・・きょうしつ<br> <br> 意味・・・いみ　　　　 								</div>
							</div>
													</div>
						<div class="col-xs-12 col-md-4">
							<div class="your_answer">
								<label class="radio-inline">
									<input type="radio" name="Q2" value="1" required=""> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q2" value="2" required=""> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q2" value="3" required=""> 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q2" value="4" required=""> 4
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q2" value="5" required=""> 5
								</label>
							</div>
						</div>
					</div>
					<hr>
																<div class="row">
						<div class="col-xs-2 col-md-1" style="font-size:1.2em">Q3.</div>
						<div class="col-xs-10 col-md-3">
							<p>Can understand the following kanji words.</p>
							<br>
							<p>以下の言葉の意味が理解できる。</p>
						</div>
						<div class="col-xs-12 col-md-4">
							大学　外国人　来年　会社　自転車　映画　旅行														<br><a href="#" role="button" class="btn btn-info btn-xs pull-left" style="margin-top:3%;" data-toggle="collapse" data-target="#answer3">正解を表示(Answer)</a>
							<div id="answer3" class="collapse" style="margin-top:10%">
								<div class="well well-sm">
									Meanings<br> <br> 大学・・・university　　外国人・・・foreigner　<br> 　<br> 来年・・・next year 　 会社・・・・・company　　<br> <br> 自転車・・・bicycle 　　映画・・・movie<br> <br> 旅行・・・travel　　　 								</div>
							</div>
													</div>
						<div class="col-xs-12 col-md-4">
							<div class="your_answer">
								<label class="radio-inline">
									<input type="radio" name="Q3" value="1" required=""> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q3" value="2" required=""> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q3" value="3" required=""> 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q3" value="4" required=""> 4
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q3" value="5" required=""> 5
								</label>
							</div>
						</div>
					</div>
					<hr>
																<div class="row">
						<div class="col-xs-2 col-md-1" style="font-size:1.2em">Q4.</div>
						<div class="col-xs-10 col-md-3">
							<p>Can make simple salutations/greetings to others.</p>
							<br>
							<p>人と会った時にきちんとあいさつができる。</p>
						</div>
						<div class="col-xs-12 col-md-4">
							Example(例)：<br>おはようございます。今日はさむいですね。<br>こんにちは。おひさしぶりですね。お元気でしたか。													</div>
						<div class="col-xs-12 col-md-4">
							<div class="your_answer">
								<label class="radio-inline">
									<input type="radio" name="Q4" value="1" required=""> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q4" value="2" required=""> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q4" value="3" required=""> 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q4" value="4" required=""> 4
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q4" value="5" required=""> 5
								</label>
							</div>
						</div>
					</div>
					<hr>
																<div class="row">
						<div class="col-xs-2 col-md-1" style="font-size:1.2em">Q5.</div>
						<div class="col-xs-10 col-md-3">
							<p>Can make simple self-introductions including your name, home country, and field of specialty.</p>
							<br>
							<p>　名前、国籍、専門分野も含めた簡単な自己紹介ができる。</p>
						</div>
						<div class="col-xs-12 col-md-4">
							Example(例)：<br>はじめまして。大阪大学の留学生（りゅうがくせい）の○○と申（もう）します。 △△から来ました。工学部（こうがくぶ）で××を研究（けんきゅう） しています。 どうぞよろしくお願（ねが） いします。													</div>
						<div class="col-xs-12 col-md-4">
							<div class="your_answer">
								<label class="radio-inline">
									<input type="radio" name="Q5" value="1" required=""> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q5" value="2" required=""> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q5" value="3" required=""> 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q5" value="4" required=""> 4
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q5" value="5" required=""> 5
								</label>
							</div>
						</div>
					</div>
					<hr>
																<div class="row">
						<div class="col-xs-2 col-md-1" style="font-size:1.2em">Q6.</div>
						<div class="col-xs-10 col-md-3">
							<p>Can provide a simple explanation of how to get from your home to school.</p>
							<br>
							<p>　自宅から大学までの通学方法について簡単に説明できる。</p>
						</div>
						<div class="col-xs-12 col-md-4">
							Example(例)：<br>家（いえ）から吹田駅（すいたえき）まで自転車（じてんしゃ）で行きます。吹田（すいた）から北千里（きたせんり）まで電車（でん しゃ）に乗（の）ります。北千里（きたせんり）から歩（ある）いて大学に来ます。ぜんぶで40分ぐらいかかります。													</div>
						<div class="col-xs-12 col-md-4">
							<div class="your_answer">
								<label class="radio-inline">
									<input type="radio" name="Q6" value="1" required=""> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q6" value="2" required=""> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q6" value="3" required=""> 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q6" value="4" required=""> 4
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q6" value="5" required=""> 5
								</label>
							</div>
						</div>
					</div>
					<hr>
																<div class="row">
						<div class="col-xs-2 col-md-1" style="font-size:1.2em">Q7.</div>
						<div class="col-xs-10 col-md-3">
							<p>Can read and comprehend an easy composition about life in Japan.</p>
							<br>
							<p>1日の生活についてやさしい日本語で書かれた文章を読んで意味がわかる。</p>
						</div>
						<div class="col-xs-12 col-md-4">
							Example(例)：　<br>わたしは毎朝（まいあさ）７時に起（お）きます。朝（あさ）ご飯（はん）にパンとたまごとサラダを食べ、コーヒーを飲（の）みます。それから歯（は）をみがきます。８時に家を出ます。家から大学まで40分ぐらいかかります。午前中（ごぜんちゅう）は、だいたい、授業（じゅぎょう）やゼミがあります。お昼（ひる）ご飯（はん）はゼミの友だちといっしょに生協（せいきょう）で食べます。午後（ごご）は実験（じっけん）をします。ときどき早（はや）く帰（かえ）れる日もありますが、たいてい９時ごろになります。おなかがすくので、ときどきサンドイッチなどを食べます。帰（かえ）りに近（ちか）くの食堂（しょくどう）で晩（ばん）ご飯（はん）を食べます。 10時半ごろ、うちに帰（かえ）ります。それからシャワーをあびて、テレビのニュースを見ます。夜（よる）は12時までに寝（ね）るようにしています。日本での生活（せいかつ）は大変（たいへん）です。 													</div>
						<div class="col-xs-12 col-md-4">
							<div class="your_answer">
								<label class="radio-inline">
									<input type="radio" name="Q7" value="1" required=""> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q7" value="2" required=""> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q7" value="3" required=""> 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q7" value="4" required=""> 4
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q7" value="5" required=""> 5
								</label>
							</div>
						</div>
					</div>
					<hr>
																<div class="row">
						<div class="col-xs-2 col-md-1" style="font-size:1.2em">Q8.</div>
						<div class="col-xs-10 col-md-3">
							<p>Can make proper use of the past tense to give a simple explanation of your personal history in your home country.</p>
							<br>
							<p>　母国での経歴について、適切な過去時制の表現によって簡単に説明できる。</p>
						</div>
						<div class="col-xs-12 col-md-4">
							Example(例)：<br>わたしは、○○年に国で大学を卒業（そつぎょう）しました。そして、５年間コンピュー タの会社（かいしゃ）に勤（つと）めていました。そのあと、大学院に入って、ネットワークを研究（けんきゅう）しました。マスターコースが終（お）わった後（あと）、大学の先生になりました。３年間先生をしていましたが、日本でもっと研究（けんきゅう）したいと思うようになりました。それで、日本に留学（りゅうがく）することにしました。													</div>
						<div class="col-xs-12 col-md-4">
							<div class="your_answer">
								<label class="radio-inline">
									<input type="radio" name="Q8" value="1" required=""> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q8" value="2" required=""> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q8" value="3" required=""> 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q8" value="4" required=""> 4
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q8" value="5" required=""> 5
								</label>
							</div>
						</div>
					</div>
					<hr>
																<div class="row">
						<div class="col-xs-2 col-md-1" style="font-size:1.2em">Q9.</div>
						<div class="col-xs-10 col-md-3">
							<p>Can explain what you want to do after graduating from the university.</p>
							<br>
							<p>大学で勉強した後何がしたいかを簡単に説明できる。</p>
						</div>
						<div class="col-xs-12 col-md-4">
							Example(例)：<br>今、わたしは日本でIP電話（でんわ）について研究（けんきゅう）しています。博士号（はかせごう）を取（と）ったら国に帰（かえ）りたいと思っています。大学の先生になるか、会社（かいしゃ）に入（はい）るか、まだ決（き）めていません。でも、みんなが安くIP電話（でんわ）が使（つか）えるようにしたいと考（かんが）えています。													</div>
						<div class="col-xs-12 col-md-4">
							<div class="your_answer">
								<label class="radio-inline">
									<input type="radio" name="Q9" value="1" required=""> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q9" value="2" required=""> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q9" value="3" required=""> 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q9" value="4" required=""> 4
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q9" value="5" required=""> 5
								</label>
							</div>
						</div>
					</div>
					<hr>
																<div class="row">
						<div class="col-xs-2 col-md-1" style="font-size:1.2em">Q10.</div>
						<div class="col-xs-10 col-md-3">
							<p>Can provide easy-to-understand explanations to professors by e-mail when it is necessary to be absent from class.</p>
							<br>
							<p>授業やゼミを休まなければならない場合、そのことを わかりやすく、先生にＥメールで伝えることができる。</p>
						</div>
						<div class="col-xs-12 col-md-4">
							Example(例)：<br> 金曜日（きんようび）の１時間目（じかんめ）のゼミに出ている○○です。 じつは、かぜをひいて しまいました。頭（あたま）がいたくて熱（ねつ）もあります。すみませんが、ゼミを休みたいと思っています。どうぞ、よろしくお願（ねが）いします。													</div>
						<div class="col-xs-12 col-md-4">
							<div class="your_answer">
								<label class="radio-inline">
									<input type="radio" name="Q10" value="1" required=""> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q10" value="2" required=""> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q10" value="3" required=""> 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q10" value="4" required=""> 4
								</label>
								<label class="radio-inline">
									<input type="radio" name="Q10" value="5" required=""> 5
								</label>
							</div>
						</div>
					</div>
					<hr>
																<div class="row" style="margin-bottom:2%">
<div class="col-md-6">
	<center>
	<a class="btn btn-default" href="select_level.php" style="font-size:1.0em" role="button">≪&nbsp;Back&nbsp;&nbsp;&nbsp;&nbsp;-戻る-</a></center>
	</div><div class="col-md-6">
	<center><button class="btn btn-primary btn-lg pull-right" style="font-size:1.4em" type="submit">Go to the next question&nbsp;&nbsp;&nbsp;&nbsp;-次の課題へ- &nbsp;≫</button></center>
	</div>
				
			</div></form>
    <!-- <div class="question-container row">
            <div class="question col-xs-12">
              <span class="question-index">Q.1</span> Can read and write Hiragana or Katakana.
              <br> 鐃緒申鐃述らが鐃淑￥申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃銃わ申鐃宿み書きわ申鐃叔わ申鐃暑。
            </div>
          <div class="text question-ask col-sm-11">
            <div class="question-content">
              <div class="text"> 鐃緒申 鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃遵う鐃祝ゅう鐃緒申鐃緒申鐃藷じょう鐃俊￥申鐃夙わ申鐃順か鐃藷　ばんごはん　ゆう鐃俊んきょく鐃緒申鐃曙い鐃緒申鐃緒申鐃緒申
                <br> 鐃緒申鐃緒申
                <BR> 鐃緒申鐃緒申鐃術￥申鐃夙￥申鐃緒申鐃緒申戞鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃峻ュー鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申奪僉鐃緒申僉鐃緒申謄鐃緒申鐃緒申鐃緒申棔鐃緒申鐃准ワ申 鐃曙ス鐃夙ワ申鐃?
              </div>
            </div>
          </div>
          <div class="col-sm-1 radio-answer" >
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-label"  name="Q1" value="1">
                  1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q1" value="2">
                  2</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q1" value="3">
                  3</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q1" value="4">
                  4</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q1" value="5">
                  5</label>
              </div>
          </div>
    </div>
    <hr>
    <div class="question-container row">
            <div class="question col-xs-12">
              <span class="question-index">Q.2</span> Can read the following kanji words correctly.
              <br> 鐃緒申鐃淑駕申鐃塾器申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申匹爐鰹申箸鐃緒申任鐃緒申襦?
            </div>
          <div class="text question-ask col-sm-11">
            <div class="question-content">
            <div class="text"> 鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申留鐃緒申鐃緒申鐃緒申鐃緒申族鐃緒申鐃渋縁申鐃緒申鐃熟駕申鉄鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申味
            <br> 鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申
            <font size="2">鐃緒申鐃緒申鐃?
              <a href="#" onClick="MM_openBrWindow('answer200-2.php','Q2answer','scrollbars=yes,resizable=yes,width=500,height=350')">鐃緒申鐃緒申鐃緒申(Answer)</a>
            </font>
            </div>
            </div>
          </div>
          <div class="col-sm-1 radio-answer" >
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-label"  name="Q2" value="1">
                  1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q2" value="2">
                  2</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q2" value="3">
                  3</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q2" value="4">
                  4</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q2" value="5">
                  5</label>
              </div>
          </div>
    </div>
    <br>
    <HR>
    <div class="question-container row">
            <div class="question col-xs-12">
              <span class="question-index">Q.3</span> Can understand the following kanji words.
              <br> 鐃緒申 鐃淑駕申鐃塾醐申鐃春の逸申味鐃緒申鐃緒申鐃緒申任鐃緒申襦?
            </div>
          <div class="text question-ask col-sm-11">
            <div class="question-content">
            <div class="text">鐃緒申鐃緒申鐃緒申鐃緒申悄鐃緒申鐃緒申鐃粛￥申鐃緒申年鐃緒申鐃緒申辧鐃緒申鐃重常申屐鐃緒申撚茵［刻申鐃?
            <br> 鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申
            <font size="2">鐃緒申鐃緒申鐃?
              <a href="#" onClick="MM_openBrWindow('answer200-3.php','Q3answer','scrollbars=yes,resizable=yes,width=500,height=350')">鐃緒申鐃緒申鐃緒申(Answer)</a>
            </font>鐃緒申
          </div>
            </div>
          </div>
          <div class="col-sm-1 radio-answer" >
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-label"  name="Q3" value="1">
                  1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q3" value="2">
                  2</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q3" value="3">
                  3</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q3" value="4">
                  4</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q3" value="5">
                  5</label>
              </div>
          </div>
    </div>
    <br>
    <HR>
    <div class="question-container row">
            <div class="question col-xs-12">
              <span class="question-index">Q.4</span> Can make simple salutations/greetings to others.
              <br> 鐃緒申鐃緒申鐃粛と駕申辰鐃緒申鐃緒申砲鐃緒申鐃緒申鐃夙わ申鐃緒申鐃緒申鐃縦わ申鐃叔わ申鐃暑。
            </div>
          <div class="text question-ask col-sm-11">
            <div class="question-content">
            <div class="text"> Example(鐃緒申)鐃緒申
            <br> 鐃緒申鐃緒申鐃熟よう鐃緒申鐃緒申鐃緒申鐃殉わ申鐃緒申鐃緒申鐃緒申鐃熟わ申鐃準い鐃叔わ申鐃粛￥申
            <br> 鐃緒申鐃緒申鐃緒申砲鐃緒申蓮鐃緒申鐃緒申劼鐃緒申鐃緒申屬鐃叔わ申鐃粛￥申鐃緒申鐃緒申鐃緒申鐃叔わ申鐃緒申鐃緒申鐃緒申
            </div>
            </div>
          </div>
          <div class="col-sm-1 radio-answer" >
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-label"  name="Q4" value="1">
                  1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q4" value="2">
                  2</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q4" value="3">
                  3</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q4" value="4">
                  4</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q4" value="5">
                  5</label>
              </div>
          </div>
    </div>
    <br>
    <HR>
    <div class="question-container row">
            <div class="question col-xs-12">
              <span class="question-index">Q.5</span> Can make simple self-introductions including your name, home country, and field of specialty.
              <br> 鐃緒申名鐃緒申鐃緒申鐃緒申鐃述￥申鐃緒申鐃緒申分鐃緒申鐃殉めた鐃緒申単鐃淑種申鐃淑紹介がでわ申鐃暑。
            </div>
          <div class="text question-ask col-sm-11">
            <div class="question-content">
            <div class="text">Example(鐃緒申)鐃緒申
            <br> 鐃緒申 鐃熟わ申鐃緒申泙鐃緒申董鐃緒申鐃緒申鐃緒申悗鐃塾縁申鐃緒申鐃緒申覆鐃遵う鐃緒申鐃緒申鐃緒申鐃緒申鐃祝の￥申鐃緒申鐃夙随申鐃淑もう鐃祝わ申鐃殉わ申鐃緒申 鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申泙鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃淑わ申鐃緒申鐃緒申鐃緒申鐃瞬）で××を研居申覆鐃緒申鵑④紊?鐃緒申
            鐃緒申鐃銃わ申鐃殉わ申鐃緒申 鐃宿わ申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃淑ねわ申鐃緒申 鐃緒申鐃緒申鐃殉わ申鐃緒申</div>
            </div>
          </div>
          <div class="col-sm-1 radio-answer" >
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-label"  name="Q5" value="1">
                  1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q5" value="2">
                  2</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q5" value="3">
                  3</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q5" value="4">
                  4</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q5" value="5">
                  5</label>
              </div>
          </div>
    </div>
    <br>
    <HR>
    <div class="question-container row">
            <div class="question col-xs-12">
              <span class="question-index">Q.6</span> Can provide a simple explanation of how to get from your home to school.
              <br> 鐃緒申鐃緒申鐃署かわ申鐃緒申悗泙任鐃緒申務鐃緒申鐃祝￥申砲弔鐃緒申憧鐃獣縁申鐃緒申鐃緒申鐃緒申任鐃緒申襦?
            </div>
          <div class="text question-ask col-sm-11">
            <div class="question-content">
            <div class="text">Example(鐃緒申)鐃緒申
            <br> 鐃緒申鐃夙（わ申鐃緒申鐃祝わ申鐃緒申鐃緒申脹悄覆鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申砲泙納鐃重常申屐覆鐃緒申討鵑靴鐃祝で行わ申鐃殉わ申鐃緒申鐃緒申鐃縦（わ申鐃緒申鐃緒申鐃祝わ申鐃緒申鐃緒申鐃緒申里鐃淑わ申鐃緒申鐃緒申鐃緒申鐃祝まわ申鐃重車（でわ申
            鐃緒申鐃緒申砲望鐃淑の）わ申泙鐃緒申鐃緒申鐃緒申鐃塾わ申覆鐃緒申鐃緒申鐃緒申鐃緒申砲鐃緒申鐃緒申鐃淑わ申鐃緒申砲鐃緒申鐃緒申鐃舜わ申鐃緒申泙鐃緒申鐃緒申鐃緒申鐃瞬わ申40分鐃緒申鐃初い鐃緒申鐃緒申鐃緒申泙鐃緒申鐃?
          </div>
            </div>
          </div>
          <div class="col-sm-1 radio-answer" >
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-label"  name="Q6" value="1">
                  1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q6" value="2">
                  2</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q6" value="3">
                  3</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q6" value="4">
                  4</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q6" value="5">
                  5</label>
              </div>
          </div>
    </div>
    <br>
    <HR>
    <div class="question-container row">
            <div class="question col-xs-12">
              <span class="question-index">Q.7</span> Can read and comprehend an easy composition about life in Japan.
              <br> 鐃緒申 1鐃緒申鐃緒申鐃緒申鐃緒申砲弔鐃緒申討笋居申鐃緒申鐃緒申鐃緒申楔鐃叔書かれた文鐃熟わ申鐃宿わ申念鐃縮ｏ申鐃緒申錣?鐃暑。
            </div>
          <div class="text question-ask col-sm-11">
            <div class="question-content">
            <DIV class="text"> Example(鐃緒申)鐃緒申鐃緒申</DIV>
            鐃緒申鐃緒た鐃緒申鐃緒申鐃緒申朝鐃淑まわ申鐃緒申鐃緒申鐃祝ｏ申鐃緒申鐃祝居申鐃淑わ申鐃祝わ申鐃殉わ申鐃緒申朝鐃淑わ申鐃緒申鐃祝わ申鐃俊（はわ申砲縫僖鐃夙わ申鐃殉わ申鐃夙ワ申鐃緒申鐃緒申鮨?べ￥申鐃緒申鐃緒申鐃述￥申鐃緒申鐃緒申覆痢砲澆泙鐃緒申鐃緒申鐃緒申譴?鐃緒申鐃緒申覆蓮砲鐃淳わ申鐃緒申鐃殉わ申鐃緒申鐃緒申鐃緒申鐃祝家わ申个泙鐃緒申鐃緒申箸鐃緒申鐃緒申鐃舜まわ申40分鐃緒申鐃初い鐃緒申鐃緒申鐃緒申泙鐃緒申鐃緒申鐃緒申鐃緒申鐃淑わ申鐃緒申鐃緒申鐃緒申紊?鐃祝は￥申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃夙（わ申鐃遵ぎ鐃順う鐃祝やゼ鐃淳わ申鐃緒申鐃緒申泙鐃緒申鐃緒申鐃緒申鐃淑ひわ申砲鐃緒申咫覆呂鐃祝はワ申鐃淳わ申友鐃緒申鐃緒申鐃夙わ申鐃獣わ申鐃緒申鐃緒申鐃緒申鐃緒申覆鐃緒申鐃緒申鐃緒申腓?鐃祝で随申鐃駿まわ申鐃緒申鐃緒申鐃淑わ申鐃緒申鐃祝は実醐申鐃淑わ申鐃獣わ申鐃緒申砲鬚靴泙鐃緒申鐃緒申箸鐃緒申匹鐃緒申鐃淑はわ申砲鐃緒申鐃緒申覆鐃緒申鐃緒申砲鐃緒申鐃緒申鐃盾あ鐃緒申泙鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申討鐃緒申鐃緒申鐃緒申鐃緒申鐃祝なわ申泙鐃緒申鐃緒申鐃緒申覆鐃緒申鐃緒申鐃緒申鐃緒申里如鐃緒申箸鐃緒申匹鐃緒申鐃緒申鐃宿ワ申鐃獣ワ申鐃淑どを食べまわ申鐃緒申鐃緒申鐃淑わ申鐃緒申鐃祝わ申剖鐃淑わ申鐃緒申鐃祝わ申鐃塾随申堂鐃淑わ申鐃順く鐃宿わ申鐃祝わ申鐃春（ばわ申砲鐃緒申咫覆呂鐃祝を食べまわ申鐃緒申
            10鐃緒申半鐃緒申鐃緒申鐃緒申鐃緒申鐃祝居申鐃淑わ申鐃緒申鐃祝わ申泙鐃緒申鐃緒申鐃緒申譴?鐃初シ鐃緒申錙種申鬚△咾董鐃緒申謄鐃俊のニュー鐃緒申鐃薯見まわ申鐃緒申鐃緒申覆鐃緒申砲鐃?12鐃緒申鐃殉でに随申鐃淑ね）わ申茲?鐃祝わ申鐃銃わ申鐃殉わ申鐃緒申鐃緒申鐃旬でわ申鐃緒申鐃緒申覆鐃緒申鐃緒申鐃緒申帖砲鐃緒申鐃緒申僉覆鐃緒申鐃緒申悗鐃祝でわ申鐃緒申
            </div>
          </div>
          <div class="col-sm-1 radio-answer" >
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-label"  name="Q7" value="1">
                  1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q7" value="2">
                  2</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q7" value="3">
                  3</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q7" value="4">
                  4</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q7" value="5">
                  5</label>
              </div>
          </div>
    </div>
    <br>
    <HR>
    <div class="question-container row">
            <div class="question col-xs-12">
              <span class="question-index">Q.8</span> Can make proper use of the past tense to give a simple explanation of your personal history in your home country.
              <br> 鐃緒申鐃緒申鐃叔の件申鐃緒申砲弔鐃緒申董鐃重?鐃准な駕申鐃緒申鐃緒申鐃緒申表鐃緒申鐃祝わ申辰憧鐃獣縁申鐃緒申鐃緒申鐃緒申任鐃緒申襦?
            <br> 鐃緒申鐃緒申鐃緒申
            </div>
          <div class="text question-ask col-sm-11">
            <div class="question-content">
            <DIV class="text"> Example(鐃緒申)鐃緒申
            <br> 鐃緒申鐃緒た鐃緒申鐃熟￥申鐃緒申鐃緒申年鐃祝刻申鐃緒申鐃舜わ申卒鐃夙（わ申鐃縦わ申鐃順う鐃祝わ申鐃殉わ申鐃緒申鐃緒申鐃緒申鐃緒申鐃銃￥申鐃緒申年鐃瞬ワ申鐃緒申團紂? 鐃緒申鐃塾駕申辧覆鐃緒申鐃緒申鐃緒申鐃祝に勤（つと）わ申討鐃緒申泙鐃緒申鐃緒申鐃緒申鐃緒申里鐃緒申函鐃緒申鐃舜縁申鐃緒申鐃緒申鐃獣て￥申鐃粛ットワー鐃緒申鐃薯研居申覆鐃緒申鵑④紊?鐃祝わ申鐃殉わ申鐃緒申鐃緒申鐃殉ワ申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃淑わ申鐃祝わ申辰鐃緒申鐃淑わ申鐃夙）￥申鐃緒申悗鐃緒申鐃緒申鐃緒申砲覆鐃殉わ申鐃緒申鐃緒申鐃緒申年鐃緒申鐃緒申鐃緒申鐃薯してわ申鐃殉わ申鐃緒申鐃緒申鐃緒申鐃緒申鐃旬でわ申辰噺鐃緒申鐃淑わ申鐃藷きゅう鐃祝わ申鐃緒申鐃緒申鐃夙思わ申鐃処う鐃祝なわ申泙鐃緒申鐃緒申鐃緒申鐃緒申鐃叔￥申鐃緒申鐃旬わ申留鐃舜（わ申紊?鐃緒申鐃緒申鐃祝わ申鐃暑こ鐃夙にわ申鐃殉わ申鐃緒申鐃緒申</DIV>
            </div>
          </div>
          <div class="col-sm-1 radio-answer" >
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-label"  name="Q8" value="1">
                  1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q8" value="2">
                  2</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q8" value="3">
                  3</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q8" value="4">
                  4</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q8" value="5">
                  5</label>
              </div>
          </div>
    </div>
    <br>
    <HR>
    <div class="question-container row">
            <div class="question col-xs-12">
              <span class="question-index">Q.9</span> Can explain what you want to do after graduating from the university.
              <br> 鐃緒申 鐃緒申悗鐃緒申拔鐃緒申鐃緒申鐃緒申絏随申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申単鐃緒申鐃緒申鐃緒申鐃叔わ申鐃暑。
            </div>
          <div class="text question-ask col-sm-11">
            <div class="question-content">
            <DIV class="text"> Example(鐃緒申)鐃緒申
            <br> 鐃緒申鐃緒申鐃緒申鐃緒た鐃緒申鐃緒申鐃緒申鐃旬わ申IP鐃緒申鐃獣（でわ申鐃祝につわ申鐃銃醐申鐃緒申覆鐃緒申鵑④紊?鐃祝わ申鐃銃わ申鐃殉わ申鐃緒申鐃緒申旅鐃淑はわ申鐃緒申鐃緒申鐃緒申鐃祝わ申鐃淑と）っわ申鐃緒申鐃祝居申鐃淑わ申鐃緒申鐃祝りた鐃緒申鐃夙思ってわ申鐃殉わ申鐃緒申鐃緒申悗鐃緒申鐃緒申鐃緒申砲覆襪?鐃緒申鐃緒申辧覆鐃緒申鐃緒申鐃緒申鐃祝わ申鐃緒申鐃淑はわ申鐃祝るか鐃緒申鐃殉わ申鐃緒申覆鐃緒申砲鐃銃わ申鐃殉わ申鐃藷。でも、鐃淳わ申覆鐃緒申造鐃?IP鐃緒申鐃獣（でわ申鐃祝わ申鐃夙（つわ申鐃祝わ申鐃緒申茲?鐃祝わ申鐃緒申鐃緒申鐃夙考（わ申鐃藷が）わ申鐃銃わ申鐃殉わ申鐃緒申
          </DIV>
            </div>
          </div>
          <div class="col-sm-1 radio-answer" >
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-label"  name="Q9" value="1">
                  1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q9" value="2">
                  2</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q9" value="3">
                  3</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q9" value="4">
                  4</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q9" value="5">
                  5</label>
              </div>
          </div>
    </div>
    <br>
    <HR>
    <div class="question-container row">
            <div class="question col-xs-12">
              <span class="question-index">Q.10</span> Can provide easy-to-understand explanations to professors by e-mail when it is necessary to be absent from
              <br> 鐃緒申鐃緒申鐃緒申鐃夙やゼ鐃淳わ申戮泙覆鐃緒申鐃出なわ申覆鐃緒申鐃順、鐃緒申鐃塾わ申鐃夙わ申 鐃緒か鐃緒申笋刻申鐃緒申鐃緒申鐃緒申鐃緒申烹泥瓠種申鐃緒申鐃緒申鐃緒申鐃暑こ鐃夙わ申鐃叔わ申鐃暑。
            </div>
          <div class="text question-ask col-sm-11">
            <div class="question-content">
            <div class="text"> Example(鐃緒申)鐃緒申
            <br> 鐃緒申鐃緒申鐃緒申鐃緒申鐃淑わ申鐃緒申茲?鐃俊）のｏ申鐃緒申鐃緒申鐃旬（わ申鐃緒申鐃緒申鐃祝のワ申鐃淳に出てわ申鐃緒申鐃緒申鐃緒申任鐃緒申鐃? 鐃緒申鐃縦は￥申鐃緒申鐃緒申鐃緒申劼鐃緒申鐃? 鐃緒申鐃殉わ申鐃殉わ申鐃緒申鐃緒申頭鐃淑わ申鐃緒申鐃殉）わ申鐃緒申鐃緒申鐃緒申鐃緒申熱鐃淑ねつ）もあ鐃緒申泙鐃緒申鐃緒申鐃緒申澆泙鐃緒申鵑?￥申鐃緒申鐃淳わ申戮澆鐃緒申鐃緒申隼廚辰討鐃緒申泙鐃緒申鐃緒申匹鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申鐃緒申覆佑鐃緒申砲鐃緒申鐃緒申泙鐃緒申鐃?</div>
            </div>
          </div>
          <div class="col-sm-1 radio-answer" >
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-label"  name="Q10" value="1">
                  1
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q10" value="2">
                  2</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q10" value="3">
                  3</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q10" value="4">
                  4</label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-label" name="Q10" value="5">
                  5</label>
              </div>
          </div>
    </div>
    <br>
    <HR>
    
    <div class="btn-next-container">
      鐃緒申鐃緒申
      <input type="submit" class="btn btn-primary" value="鐃緒申鐃緒申Next鐃緒申鐃緒申" name="submit">
    </DIV> -->
  </form>
  </div>
</body>

</html>
