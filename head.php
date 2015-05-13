
<?php
  // displays spalsh page if cookie is not set
  if (!isset($_COOKIE["visited"])){
    include_once "splash.php";
    // sets cookie and spalsh is no longer displayed
    setcookie("visited", TRUE, time() + 84600);
  }
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo "BRPTraining - ".$page; ?></title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato|Roboto+Condensed' rel='stylesheet' type='text/css'>
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>

  <body>
    
  <?php include_once "nav.php" ?>