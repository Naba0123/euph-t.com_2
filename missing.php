<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- HTML head -->
  <?php
    $myTitle = "No Page";
    include "template/head.php";
  ?>
</head>
<body>

  <!-- navbar -->
  <?php include "template/body_navbar.php"; ?>

  <!-- container -->
  <div class="container">
  
    <!-- contents -->
    <div class="contents mybox-border-shadow">

      <h1><i class="glyphicon glyphicon-flash"></i> No Page</h1>
      
      <p>指定されたページが見つかりませんでした。URLが間違っている可能性があります。</p>
      
    </div> <!-- end contents -->

    <!-- footer -->
    <?php include "template/body_footer.php"; ?>

  </div> <!-- end container -->

</body>

</html>
