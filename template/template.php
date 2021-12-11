<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- HTML head -->
  <?php
    $myTitle = "Template";
    include "template/head.php";
  ?>
</head>
<body>

  <!-- navbar -->
  <?php include "template/body_navbar.html"; ?>

  <!-- container -->
  <div class="container">
  
    <!-- contents -->
    <div class="contents mybox-border-shadow">
      
      <?php include("template/breadcrumbs.php"); ?>
      <h1>Template Page</h1>
      
    </div> <!-- end contents -->

    <!-- footer -->
    <?php include "template/body_footer.html"; ?>

  </div> <!-- end container -->

</body>

</html>
