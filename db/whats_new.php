<?php

return;

// 変数定義
$show = 4; //読み込む数


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
$result = mysql_query('SELECT SQL_CALC_FOUND_ROWS * FROM whats_new ORDER BY date DESC'); //DESCで降順
if (!$result) {
  die('クエリーが失敗しました。'.mysql_error());
}
$row = mysql_fetch_assoc($result);
$num_result = mysql_query('SELECT FOUND_ROWS()'); // 件数取得
list($num) = mysql_fetch_row($num_result);

echo "\n";
switch($num) {
  case "":
    echo "<p><span class=\"label label-danger\">Danger</span> データベースには何もありません。</p>\n";
    break;
  default:
    echo "<!-- <p><span class=\"label label-success\">Success</span> データベースを読み込みました</p> -->\n";
    echo "<table class=\"table\">\n";
    echo "  <thead>\n";
    print "    <tr><th><span class=\"notbr\">" . date("Y / m / d",strtotime($row['date'])) . "</span></th><th><span class=\"label label-info\">New</span> <span class=\"notbr\">" . $row['content'] . "</span></th></tr>\n";
    echo "  </thead>\n";
    echo "  <tbody>\n";
    // 表示予定数$showより実際のデータ数が少ない場合、表示するのはデータ数にする
    if ($show > $num) {
      $show = $num;
    }
    for ($i = 1; $i < $show; $i++) {
      $row = mysql_fetch_assoc($result);
      print "    <tr><td>" . date("Y / m / d",strtotime($row['date'])) . "</td><td>" . $row['content'] . "</td></tr>\n";
    }
    echo "  </tbody>\n";
    echo "</table>\n";
}



// MySQLへのディスコネクション
$close_flag = mysql_close($link);
if (!$close_flag){
  print('<p>切断に失敗しました。</p>');
}

?>



