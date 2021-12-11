<?php

return;

// 変数定義
$show = 6; //読み込む数


// MySQLへのコネクション。各変数はheadで定義している。
$link = mysql_connect($mysql_address, $mysql_user, $mysql_pass);
if (!$link) {
  die('データベースに接続失敗しました。'.mysql_error());
}


//データベースへの接続。
$db_selected = mysql_select_db('euphoria_time', $link);
if (!$db_selected){
  die('データベース選択失敗です。'.mysql_error());
}


//SELECT文の設定
$result = mysql_query('SELECT SQL_CALC_FOUND_ROWS * FROM illustration ORDER BY upload DESC'); //DESCで降順
if (!$result) {
  die('クエリーが失敗しました。'.mysql_error());
}
$row = mysql_fetch_assoc($result);
$num_result = mysql_query('SELECT FOUND_ROWS()'); // 件数取得
list($num) = mysql_fetch_row($num_result);

switch($num) {
  case "":
    echo "<p><span class=\"label label-danger\">Danger</span> データベースには何もありません。</p>\n";
    break;
  default:
    echo "<!-- <p><span class=\"label label-success\">Success</span> データベースを読み込みました</p> -->\n";
    echo "\n<div class=\"row\">\n";
    // 表示予定数$showより実際のデータ数が少ない場合、表示するのはデータ数にする
    if ($show > $num) {
      $show = $num;
    }
    for ($i = 0; $i < $show; $i++) {
      $row = mysql_fetch_assoc($result);
      echo "<div class=\"col-sm-6 col-md-4\">\n";
      echo "  <div class=\"thumbnail  mybox-border-shadow\">\n";
      print "    <p class=\"thum-date\">UPLOAD : " . date("Y/m/d", strtotime($row['upload'])) . "</p>\n";
      print "    <a href=\"" . $row['image'] . "\" data-lightbox=\"" . $row['name'] . "\" data-title=\"" . $row['comment'] . "\">\n";
      print "      <img src=\"" . $row['thumnail'] . "\" alt=\"" . $row['title'] . "\" class=\"thum-shadow\">\n";
      echo "    </a>\n";
      print "    <p class=\"thum-post\"> Posted by " . $row['name'] . "</p>\n";
      echo "    <div class=\"caption\">\n";
      print "      <h3>" . $row['title'] . "</h3>\n";
      print "      <p>" . $row['subtitle'] . "</p>\n";
      echo "    </div>\n";
      echo "  </div>\n";
      echo "</div>\n";
    }
    echo "</div>\n";
}



// MySQLへのディスコネクション
$close_flag = mysql_close($link);
if (!$close_flag){
  print('<p>切断に失敗しました。</p>');
}

?>



