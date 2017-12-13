<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="ja">
<meta http-equiv="Content-Type" content="text/html; charset="euc-jp">

<TITLE>Level 200 Task 2</TITLE>

<LINK HREF="./style.css" REL="stylesheet" TYPE="text/css">
<LINK REL="INDEX" HREF="./index.html">
<STYLE>
<!--
.def{color:#000066;background:#c0ccc0;font:bold large "MSP�����å�";}
-->
</STYLE>
</head>
<body>
<HR>

<H1 class="center">200��٥�</H1>

<HR>
<hr>
<font size="4">&lt;Task 2&gt;<br>
����ꣲ��</font><br>
<br>
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>For the questions below, select the most appropriate word for the parentheses 
      from the drug-down list on the right. After answering all of the questions, 
      click the &quot;Next&quot; button at the bottom of the page. <br>
      As reloading the page will cause the questions to change, please refrain 
      from reloading the page.<br>
      �ʲ���ʸ�Ρʡ����ˤ������äȤ�Ŭ���ʤ��ȤФ򡢱�ü������褫��������Ǥ��������������������������顢���ֲ��Ρ�Next��ܥ���򥯥�å����Ƥ���������<br>
      ���̤���ɹ�����Ȱ㤦���꤬�ФƤ���Τǡ����ɹ��Ϥ��ʤ��Ǥ���������<br>
    </td>
  </tr>
</table>
<br>
<HR>

<FORM onsubmit="return FormCheck(this)" action="result.php" method="post">
<input type=hidden name="NLEVEL" value="200">
  <?php
for($i=1;$i<11;$i++){
$id="Q".$i;
print("<input type=hidden name=".$id." value=".$_POST[$id].">\n");
}
print("<table>");
mt_srand((double)(microtime()*1000000));
$j=0;
$fl=fopen("testKai.csv","r");
while($mdat=fgetcsv($fl,160)){
for($i=0;$i<count($mdat);$i++){
$dat[$j+$i]=$mdat[$i];
}
$j=$j+$i;
}
$f=count($dat);
fclose($fl);
$num=0;
for($i=0;$i<20;$i++){
$rnd=mt_rand(1,5);
$num=$num+$rnd*6;
$inum=$i+11;
for($k=1;$k<6;$k++){
 do{
  $onum[$k]=mt_rand(1,5);
  $ckp=0;
  for($l=$k-1;$l>0;$l--){
   if($onum[$k]==$onum[$l]){
    $ckp=1;
   }
  }
 }while($ckp>0);
}
$pnum=$inum-10;
print("<tr><td class=text>Q.".$pnum."<br>".$dat[$num]."</td><td><select name=Q".$inum++.">\n<option value=0> \n");
for($j=1;$j<6;$j++){
$opt[$onum[$j]]="<option value=".$j.">".$dat[$j+$num]."\n";
}
for($k=1;$k<6;$k++){
print($opt[$k]);
}
print("</select></td></tr>\n");
}
?></table>
  <HR>
  <DIV class="left"> ���� 
    <INPUT type="submit" class="def"  value="����Next����">
</DIV>
</FORM>
</body>
</html>

