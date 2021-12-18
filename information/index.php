<?php $root = '../' ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- HTML head -->
  <?php
    $myTitle = "Information";
    include "../template/head.php";
  ?>
  <style type="text/css">
    #site {
      padding-top: 40px;
      margin-top: -40px;
    }
    #pen {
      padding-top: 40px;
      margin-top: -40px;
    }
    #miso {
      padding-top: 40px;
      margin-top: -40px;
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
      <h1><span class="glyphicon glyphicon-list-alt"></span> Information</h1>
      <p class="contents-text">Euphoria Timeの概要だったり、サーバー情報だったり、メンバー紹介だったり。</p>

      <!-- About This Site -->
      <div id="site">
        <hr>
        <h2><span class="glyphicon glyphicon-home"></span> About Euphoria Time</h2>
        <div class="contents-text">
          <p><strong>Euphoria Time</strong>は、同人ゲーム製作を目標にしているサークルです。</p>
          <p>しかし、内容はゲーム制作に限っておらず、幅広くやりたいことをメンバーが公開しようとしています。</p>
        </div>
        <h3><span class="glyphicon glyphicon-hdd"></span> 自宅サーバー</h3>
        <div class="row">
          <div class="col-sm-7">
            <div class="contents-text">
              <p>このサイトは自宅サーバーより配信されています。</p>
              <p>サーバーの情報を記します。</p>
              <div class="panel panel-default" style="padding:0px 10px 10px; margin-top: 15px;">
                <table class="table panel-body">
                  <thead>
                    <tr>
                      <th>Naba Server</th>
                      <th>2014 / 08 / 20 現在</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>CPU</td>
                      <td>CeleronR G550 @ 2.60GHz</td>
                    </tr>
                    <tr>
                      <td>Memory</td>
                      <td>4096MB</td>
                    </tr>
                    <tr>
                      <td>HDD</td>
                      <td>640GB</td>
                    </tr>
                    <tr>
                      <td>OS</td>
                      <td>Ubuntu 14.04.5 LTS 64bit</td>
                    </tr>
                    <tr>
                      <td>Web</td>
                      <td>Apache 2.4.10</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <img src="img/server.jpg" class="img-responsive img-bsr" alt="server" style="margin:auto">
          </div>
        </div>
      </div>

      <div id="pen">
        <hr>
        <h2><span class="glyphicon glyphicon-user"></span> Naba</h2>
        <div class="row">
          <div class="col-sm-12 col-md-3">
            <img src="img/pen.jpg" alt="pen" class="img-responsive img-bsr">
          </div>
          <div class="col-sm-8 col-md-6">
            <div class="contents-text">
              <p>ゲーム制作においては、主に<strong>プログラミング・楽曲</strong>をメインに担当しています。</p>
              <p>サブコンテンツに、StepManiaの譜面公開、自作プログラムの公開などを行う予定です。</p>
              <div class="panel panel-default link-panel">
                <table class="table panel-body">
                  <thead>
                    <tr>
                      <th>Link</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><i class="fa fa-twitter"></i> Twitter</td>
                      <td><a href="https://twitter.com/Naba0123/" title="Naba0123">Naba0123</a></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-wordpress"></i> Blog</td>
                      <td><a href="javascript:void(0)" title="-----">-----</a></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-github"></i> Github</td>
                      <td><a href="javascript:void(0)" title="-----">-----</a></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-soundcloud"></i> SoundCloud</td>
                      <td><a href="javascript:void(0)" title="-----">-----</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-3">
            <a class="twitter-timeline" href="https://twitter.com/naba0123" data-widget-id="432350047968055296">@naba0123 からのツイート</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
        </div>
      </div>

      <div id="miso">
        <hr>
        <h2><span class="glyphicon glyphicon-user"></span> -----</h2>
        <div class="row">
          <div class="col-sm-12 col-md-3">
            <img src="img/miso.jpg" alt="miso" class="img-responsive img-bsr">
          </div>
          <div class="col-sm-8 col-md-6">
            <div class="contents-text">
              <p>----------<br>----------</p>
              <div class="panel panel-default link-panel">
                <table class="table panel-body">
                  <thead>
                    <tr>
                      <th>Link</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><i class="fa fa-twitter"></i> Twitter</td>
                      <td><a href="javascript:void(0)" title="-----">Twitter</a></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-wordpress"></i> Blog</td>
                      <td><a href="javascript:void(0)" title="-----">-----</a></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-file-image-o"></i> Pixiv</td>
                      <td><a href="javascript:void(0)" title="-----">-----</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-3">
            <p>ついったー</p>
          </div>
        </div>
      </div>
      
    </div> <!-- end contents -->

    <!-- footer -->
    <?php include "../template/body_footer.php"; ?>

  </div> <!-- end container -->

</body>

</html>



