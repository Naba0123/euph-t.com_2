<?php

//============================================//
// breadnavi.php Ver.030715										//
// scripted by AOYAMA, mtblue.org,						//
//	All Rights and Responsibilities Released.	//
//                                            //
//  より多くの方のご意見を頂戴したいので、               //
//  できれば www.mtblue.org へのリンクを             //
//  お願いします。強制ではありません。                  //
//============================================//

		//あらかじめ参照元のファイル名が「myFullname」、
		//<title>と初出の<h1>が「myTitle」として読み込まれることが前提。


//以下設定事項
$sprtr = "　<span class=\"glyphicon glyphicon-chevron-right\"></span>　";		//区切り記号。<img />も可。ただし絶対パスで。
//以上設定事項

$myFullname = str_replace("/contents/", "/Contents/", $myFullname);

$breadized = preg_split( "/\//", "$myFullname" );		//スラッシュで分割し配列。

$num = count($breadized);		//配列の個数。 ROOT/photo/sky/spring.php なら「4」を返す。

//	echo "\n<hr />\n\n<p id=\"breadnavi\">\n\t";
print "<div class=\"breadnavi\">" . "\n";

echo "        <div class=\"breadcrombs-text\">";

for ($i=0;$i<$num;$i++) {				//ルートまでループ
	if ($i+1==$num) {							//自身の場合。<title>および初出の<h1>と同名を表示。
		echo "<em>$myTitle</em>";
	}
	else if (strpos("$myFullname", "index.")) {		//自身がindexのとき。
		if ($i+2!==$num) {				//カレントディレクトリへの記述はしない。
			echo "<a href=\"";
				for ($j=$num-$i-2;$j>0;$j--) {		//一段上への相対リンクをルートまで記述。
					echo "../";
				}
			echo "\">$breadized[$i]</a>$sprtr";
		}
	}
	else if ($i+2==$num) {			//自身がindexでないとき。カレントディレクトリの記述。
		echo "<a href=\"./\">$breadized[$i]</a>$sprtr";
	}
	else {
		echo "<a href=\"";
		for ($j=$num-$i-2;$j>0;$j--) {		//一段上への相対リンクをルートまで記述。
				echo "../";
		}
		echo "\">$breadized[$i]</a>$sprtr";
	}
}

// echo "\n</p>\n\n<hr />\n\n";
echo "</div>" . "\n";

// ファイルの最終更新日時を表示
$myname = basename($_SERVER['PHP_SELF']);
// print $_SERVER['PHP_SELF'];
$mod = filemtime($myname);
print "        <div class=\"lastupdate-text\">";
echo "<span class=\"notbr\">";
print "LAST UPDATE : " . date("Y/m/d",$mod);
echo "</span>";
print "</div>" . "\n";

print "      </div>" . "\n\n";

?>
