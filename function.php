<?php

//データ取得全般 ----------------------------------------------------------------------------------
//質問データ取得関数
function GetQuesContent($q_no, $link)
{
  $sql = 'SELECT * FROM q_data WHERE q_no LIKE \'' . $q_no . '%\'';
  $result = fetch_array_all($sql, $link);
  return $result;
}

//回答項目データ取得関数
function GetAnsItemContent($q_no, $link)
{
  $sql = 'SELECT * FROM answer_val WHERE q_no LiKE \'' . $q_no . '%\' ORDER BY ans_idx';
  $result = fetch_array_all($sql, $link);
  return $result;
}

//データ取得関数
function fetch_array_all($sql, $link)
{
  $record = array();
  $result = mysqli_query($link, $sql);
  $i = 0;

  if ($result !== false && mysqli_num_rows($result)) {
    while ($record[$i] = mysqli_fetch_array($result, MYSQL_NUM)) {
      $i = $i + 1;
    }
  }

  return $record;
}

//回答データのセッション保存
function save_result()
{
  $_SESSION['ans_flag'] = 'on';
  //途中保存用のダミーデータ
  foreach ($_POST as $label_name => $result_value) {
    if (array_key_exists($label_name, $_SESSION['answer'])) {
      $_SESSION['answer'][$label_name] = $result_value;
    }
  }
}

//ユーザー情報の有無確認と途中保存ページ取得
function CheckUserData($user_id, $link)
{
  $sql = 'SELECT * FROM user_data WHERE user_id ="' . $user_id . '"';
  return fetch_array_all($sql, $link);
}

function Get_UserAnsData($user_id, $link)
{
  $sql = 'SELECT * FROM answer_data WHERE user_id="' . $user_id . '"';
  $result = fetch_array_all($sql, $link);

  for ($i = 0; $i < count($result); $i++) {
    $_SESSION['answer'][$result[$i][2]] = $result[$i][3];
  }

}

function Save_UserAnsData($user_id, $save_page, $link)
{

  //過去の途中保存データを削除
  $sql = 'DELETE FROM answer_data WHERE user_id="' . $user_id . '"';
  $result = mysqli_query($link, $sql);

  //再度改めて保存
  $ans_data = $_SESSION['answer'];

  $i = 1;

  foreach ($ans_data as $label_name => $ans) {
    $idx = $i - 1;
    $result_label = $label_name; //mysqli_real_escape_string($link, $label[$idx]);
    $result_value = mysqli_real_escape_string($link, $ans);

    $sql = "INSERT INTO answer_data(user_id, q_no, ans_id, ans_val) VALUES('{$user_id}', {$i}, '{$result_label}', '{$result_value}')";
    $result = mysqli_query($link, $sql);
    if (!$result) {
      die('SQL error : ' . mysql_error() . " SQL:" . $sql);
    }

    $i = $i + 1;
  }

  //ユーザー情報更新
  $user_ip = mysqli_real_escape_string($link, $_SERVER['REMOTE_ADDR']);
  $user_agent = mysqli_real_escape_string($link, $_SERVER['HTTP_USER_AGENT']);
  $updated_at = date('Y-m-d H:i:s');

  $sql = 'UPDATE user_data SET ip_addr="' . $user_ip . '", user_agent="' . $user_agent . '", save_page="' . $save_page . '", last_updated="' . $updated_at . '" WHERE user_id="' . $user_id . '"';
  $result = mysqli_query($link, $sql);
  if (!$result) {
    die('Connect error : ' . mysql_error());
  }

  //セッション保存のデータクリア
  for ($i = 0; $i < count($label); $i++) {
    $_SESSION['answer'][$label[$i]] = "";
  }
}

//ページ遷移処理 ----------------------------------------------------------------------------------
//ページ遷移判断
function page_switch($page)
{

}
