<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- HTML head -->
  <?php
    $myTitle = "Contents";
    include "../template/head.php";
  ?>
  <style>
    .panel-heading {
      background-color: #DCDCDC !important;
    }
    #main {
      padding-top: 60px;
      margin-top: -60px;
    }
    #sub {
      padding-top: 60px;
      margin-top: -60px;
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
      
      <h1>Contents</h1>
       <p class="contents-text">Contentsのindexページ</p>
      <hr>
      
      <div id="main">
        <h2><span class="glyphicon glyphicon-book"></span> Main Contents</h2>
        <p class="contents-text">Main Contentsは、目標となる同人ゲーム製作や、その他に主に公開していくコンテンツです。</p>
        
        <div class="row">
        
          <div class="col-md-6">
            <div class="panel panel-default margin-bottom-panel">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span> <strong>Games</strong></h3>
              </div>
              <div class="panel-body">
                <a href="/contents/games/"><img src="contents_img/contents.png" alt="contents" class="img-responsive img-bsr"></a>
                <p>当サークルの一番の目標である<strong>同人ゲーム製作</strong>に向けたページです。</p>
                <p>ゲームジャンルはノベルゲームを一番に考えていますが、幅広く考えています。</p>
                <p>いずれはここでゲームの公開などを行えたら・・・いいなぁ（遠い目）。</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="panel panel-default margin-bottom-panel">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-headphones"></span> <strong>Music</strong></h3>
              </div>
              <div class="panel-body">
                <img src="contents_img/contents.png" alt="contents" class="img-responsive img-bsr">
                <p>自作曲の公開です。</p>
                <p>ゲーム音楽の練習がてらだったりするのでクオリティは様々。</p>
              </div>
            </div>
          </div>
        
        </div> <!-- end row -->
        
        <div class="row">
          
          <div class="col-md-6">
            <div class="panel panel-default margin-bottom-panel">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-picture"></span> <strong>Illustration</strong></h3>
              </div>
              <div class="panel-body">
                <img src="contents_img/contents.png" alt="contents" class="img-responsive img-bsr">
                <p>イラストです。</p>
                <p>技術を高めるために下書きなども公開してます。</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="panel panel-default margin-bottom-panel">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span> <strong>Programs</strong></h3>
              </div>
              <div class="panel-body">
                <img src="contents_img/contents.png" alt="contents" class="img-responsive img-bsr">
                <p>自作プログラムの公開です</p>
                <p>言語は恐らくJavaです。また、役に立つソフトかどうかは…（ｒｙ</p>
              </div>
            </div>
          </div>
                  
        </div> <!-- end row -->
        
      </div> <!-- end main -->
      
      <hr style="margin-top: 30px;">
      <div id="sub">
      
        <h2><span class="glyphicon glyphicon-book"></span> Sub Contents</h2>
        <p class="contents-text">Sub Contentsは、Main Contentsとは別に公開したいコンテンツです。</p>
        
        <div class="row">
        
          <div class="col-md-6">
            <div class="panel panel-default margin-bottom-panel">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-camera"></span> <strong>Pictures</strong></h3>
              </div>
              <div class="panel-body">
                <img src="contents_img/contents.png" alt="contents" class="img-responsive img-bsr">
                <p>一眼レフを片手に、旅行先だったり日常だったり、そんな写真。</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="panel panel-default margin-bottom-panel">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-gamepad"></i> <strong>Stepmania</strong></h3>
              </div>
              <div class="panel-body">
                <img src="contents_img/contents.png" alt="contents" class="img-responsive img-bsr">
                <p>フリーのPC用音楽ゲームStepManiaの譜面を公開しています。</p>
                <p>楽曲は自作したい。あと難易度も高めに。</p>
              </div>
            </div>
          </div>
        
        </div> <!-- end row -->
        
        <div class="row">
          
          <div class="col-md-6">
            <div class="panel panel-default margin-bottom-panel">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-film"></span> <strong>PSO2 Galary</strong></h3>
              </div>
              <div class="panel-body">
                <img src="contents_img/contents.png" alt="contents" class="img-responsive img-bsr">
                <p>SEGAのオンラインゲーム、Phantasy Star Online 2の情報です。</p>
                <p>自キャラの紹介だったり、スクリーンショットの公開だったり。</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="panel panel-default margin-bottom-panel">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-cube"></i> <strong>Minecraft</strong></h3>
              </div>
              <div class="panel-body">
                <img src="contents_img/contents.png" alt="contents" class="img-responsive img-bsr">
                <p>Minecraft</p>
              </div>
            </div>
          </div>
                  
        </div> <!-- end row -->

      
      </div> <!-- end sub -->
      
    </div> <!-- end contents -->

    <!-- footer -->
    <?php include "../template/body_footer.php"; ?>

  </div> <!-- end container -->

</body>

</html>




