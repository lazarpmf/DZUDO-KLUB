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
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="skin/default.css">
</head>

<body style="height: 0px !important;">
  <section id="header" class="appear"></section>
  <?php include 'menu.php'; ?>
  <?php include 'phpScripts/connection.php'; $sql = "SELECT * FROM sections"; $result = mysqli_query($conn, $sql); ?>

 
<section class="firstSection">
  <div class="container">
    
      <?php while($row = mysqli_fetch_array($result)){ ?>
      <div class="row">
      <div class="centerDiv sectionHeadline centerText col-sm-12">
        <?php echo $row['Name']?>
      </div>
      <div class="col-sm-5 centerDiv marginDiv">
        <span class="pointed">Trener:  </span><span class="blackColor"><?php echo $row['Coach']?></span>
      </div>
      <div class="col-sm-5 centerDiv marginDiv">
        <span class="pointed">Termini:  </span><span class="blackColor"><?php echo $row['Terms']?></span>
      </div>
       <div class="col-sm-5 centerDiv marginDiv">
        <span class="pointed">Detaljnije:  </span><span class="blackColor"><?php echo $row['Description']?></span>
      </div>
    </div>
    <hr>
    <?php } ?>
    
  </div>
</section>
 


  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.localScroll.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
