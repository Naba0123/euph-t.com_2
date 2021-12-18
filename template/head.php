<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?= $root ?>favicon.ico" type="image/vnd.microsoft.icon">

<!-- Stylesheet -->
<link href="<?= $root ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= $root ?>lib/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="<?= $root ?>css/main.css" rel="stylesheet">
<link href="<?= $root ?>css/slides.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= $root ?>bootstrap/js/bootstrap.min.js"></script>

<!-- SlidesJS < slidesjs.com > -->
<script src="<?= $root ?>lib/SlidesJS-3/jquery.slides.js"></script>
<script>
  $(function(){
    $("#slides").slidesjs({
      width: 1170,
      height: 500,
      navigation: {
        active: false,
      },
      play: {
        auto: true,
        pauseOnHover: true,
        restartDelay: 2500
      },
      effect: {
        slide: {
          // Slide effect settings.
          speed: 600
            // [number] Speed in milliseconds of the slide animation.
        }
      }
    });
    $('.slidesjs-pagination-item a').click(function() {
      $('a.slidesjs-play').click();
    });
  });
</script>

<!-- lightbox　-->
<script src="<?= $root ?>lib/lightbox/js/lightbox.min.js"></script>
<link href="<?= $root ?>lib/lightbox/css/lightbox.css" rel="stylesheet">

<!-- title -->
<title><?php
    if (!isset($myTitle)) {
      print 'Euphoria Time';
    } else {
      print $myTitle . ' - Euphiria Time';
    }
  ?></title>
<?php
  $myFullname = "HOME" . $_SERVER['PHP_SELF'];
  // Mysqlサーバーの接続先
  $mysql_address = "hostname";
  $mysql_user = "username";
  $mysql_pass = "password";
?>
