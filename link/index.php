<?php $root = '../' ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- HTML head -->
  <?php
    $myTitle = "Link";
    include "../template/head.php";
  ?>
  <style>
    .link {
      padding-bottom: 10px;
    }
    .link p {
      color: gray;
      margin: 0px 0px 0px 10px;
      font-size:small;
    }
    .link i {
      font-size: large;
    }
    .link a {
      color: black;
      font-size: large;
    }
    .link a:hover {
      color: black;
    }
    h3 {
      margin-bottom: 20px;
    }
    .icon {
      max-width:22px;
      margin-top:0px;
      margin-right:5px;
      float:left;
    }
  </style>
</head>
<body>

  <!-- navbar -->
  <?php include "../template/body_navbar.php"; ?>

  <!-- container -->
  <div class="container">
  
    <!-- contents -->
    <div class="contents mybox-border-shadow">
      
      <?php include("../template/breadcrumbs.php"); ?>
      <h1><span class="glyphicon glyphicon-link"></span> Link</h1>
      <p class="contents-text">よくあるリンク集です。</p>
      
      <hr>
      
      <h3><span class="glyphicon glyphicon-th"></span> Euphoria Time</h3>
      <div class="contents-text link">
        <i class="fa fa-wordpress"></i> <a href="javascript:void(0)">-----</a>
        <p>ブログです。普段感じたこと、学んだことを投稿しています。</p>
      </div>
      <div class="contents-text link">
        <i class="fa fa-wordpress"></i> <a href="javascript:void(0)">-----</a>
        <p>ブログです。普段の観測記録、天文関係の記事なども投稿します。</p>
      </div>
      <div class="contents-text link">
        <span class="glyphicon glyphicon-file"></span> <a href="javascript:void(0)">-----</a>
        <p>当HPがリニューアルされる前のHPです。この頃よりはデザイン力が進化したと思いたい。</p>
      </div>

      <hr>
      
      <h3><span class="glyphicon glyphicon-cog"></span> Programs</h3>
      <div class="contents-text link">
        <img src="ico/bootstrap.ico" alt="" class="icon"> <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a>
        <p>簡単にレスポンシブデザインに対応したサイトが作れるCSSフレームワーク。</p>
      </div>
      <div class="contents-text link">
        <i class="fa fa-desktop"></i> <a href="http://www.hi-ho.ne.jp/douton/htmlcolor.html" target="_blank">HTML色図鑑</a>
        <p>Webセーフカラーを使用したHP製作の際にお世話になりました。</p>
      </div>
      <div class="contents-text link">
        <img src="ico/font_awesome.ico" alt="" class="icon img-responsive"> <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome</a>
        <p>SNSアイコンをはじめ、役立つアイコン</p>
      </div>
      <div class="contents-text link">
        <img src="ico/java_drive.ico" alt="" class="icon img-responsive"> <a href="http://www.javadrive.jp/" target="_blank">JavaDrive</a>
        <p>Javaに限らず様々なプログラミングの記事</p>
      </div>
      
    </div> <!-- end contents -->

    <!-- footer -->
    <?php include "../template/body_footer.php"; ?>

  </div> <!-- end container -->

</body>

</html>
