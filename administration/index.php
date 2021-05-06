<?php
  session_start();
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Dzudo klub</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />
  <link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../skin/default.css">
  <style type="text/css" media="screen">
  .box {
    text-align: center;
    padding: 100px;
    border: 2px solid red;
    background-color: white;
  }

  .box span {
    font-size: 20px;
    color: red;
    font-weight: bold;
  }
  </style>
</head>

<body style="height: 600px !important; background-image: url('img/background.jpg'); background-size: cover;">
  <section id="header" class="appear"></section>
  <?php include 'menu.php'; ?>
  <div class="container">
    <div class="row" style="margin-top: 200px;">
      <div class="col-sm-4 box">
        <a href="sections.php" title=""><span>Dodaj/izmijeni podatke o sekcijama</span></a>
      </div>
      <div class="col-sm-4 box">
        <a href="competitions.php" title=""><span>Dodaj/izmijeni podatke o takmicenjima</span></a>
      </div>
      <div class="col-sm-4 box">
        <a href="news.php" title=""><span>Dodaj/izmijeni <br> novosti</span></a>
      </div>
    </div>
  </div>
  <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="../js/skrollr.min.js"></script>
  <script src="../js/jquery.localScroll.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>