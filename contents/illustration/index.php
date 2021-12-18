<?php $root = '../../' ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- HTML head -->
  <?php
    $myTitle = "Illustration";
    include "../../template/head.php";
  ?>
</head>
<body>

  <!-- navbar -->
  <?php include "../../template/body_navbar.php"; ?>

  <!-- container -->
  <div class="container">
  
    <!-- contents -->
    <div class="contents mybox-border-shadow">
      
      <div class="row">
      
        <div class="col-sm-6 col-md-8">
          <?php include("../../template/breadcrumbs.php"); ?>
          <h1>Illustration</h1>
          <div class="panel panel-default">
            <div class="panel-body">
              <p>イラストを公開しているのよ（ﾁﾗｯ</p>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Information</h3>
            </div>
            <div class="panel-body">
              <p>Panel Contents</p>
              <p>Panel Contents</p>
              <p>Panel Contents</p>
            </div>
          </div>
        </div>
      </div>
      
    </div> <!-- end contents -->
      
    <!-- image galary -->
    <?php include "../../db/illustration.php"; ?>

    <!-- footer -->
    <?php include "../../template/body_footer.php"; ?>
  
  </div> <!-- end container -->

</body>

</html>



