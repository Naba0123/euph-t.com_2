<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- HTML head -->
  <?php
    $myTitle = "";
    include "template/head.php";
  ?>
</head>
<body>

  <!-- navbar -->
  <?php include "template/body_navbar.php"; ?>
  
  <!-- container -->
  <div class="container">

    <!-- Sliders -->
    <div class="contents mybox-border-shadow contents-slides">
      <div id="slides">
        <img src="./img/slides/slider01.jpg" alt="" class="slides-img">
        <img src="./img/slides/slider02.jpg" alt="" class="slides-img">
        <img src="./img/slides/slider03.jpg" alt="" class="slides-img">
        <a href="#" class="slidesjs-previous slidesjs-navigation"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a href="#" class="slidesjs-next slidesjs-navigation"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
    </div> <!-- end Sliders -->
    
    <div class="row">
      
        <div class="col-sm-7">
        
          <!-- contents -->
          <div class="contents mybox-border-shadow">
  
            <h2>Welcome to <span class="notbr">Euphoria Time</span></h2>
            
            <p>やる気ゲージ</p>
            <div class="progress progress-striped active">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                <span class="sr-only">5%</span>
              </div>
            </div>
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">お知らせ</h3>
              </div>
              <div class="panel-body">
                <p>このHPデザインに飽きました＾ｑ＾</p>
                <p>全てのリンクが正しく動いているかどうかは分かりませんが、折角ここまで作ったので公開します。</p>
              </div>
            </div>
          </div> <!-- end contents -->
        </div> <!-- end col-sm6 col-md-8 -->
        
        <div class="col-sm-5">
        
          <div class="panel panel-info mybox-border-shadow">
            <div class="panel-heading text-center">
              <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span> What's New</h3>
            </div>
            <div class="panel-body">
              <?php include "db/whats_new.php"; ?>
              <a href="./new/" class="btn btn-default btn-sm pull-right" role="button">
                <span class="glyphicon glyphicon-calendar"></span> More Older
              </a>
            </div>
          </div> <!-- end panel -->
          
        </div> <!-- end col-sm6 col-md-4 -->

    </div> <!-- end row -->
    
    <!-- footer -->
    <?php include "template/body_footer.php"; ?>

  </div> <!-- end container -->

</body>

</html>
