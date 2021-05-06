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

<body>
  <section id="header" class="appear"></section>
  <?php include 'menu.php'; ?>
  <?php include 'phpScripts/connection.php'; $id = $_GET['id']; $sql = "SELECT * FROM competitions C inner join images I on I.ImageID = C.ImageID WHERE C.CompetitionID = '$id' "; $result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result); ?>

 
<section class="firstSection">
  <div class="container">
    <div class="row competitionRowDiv">
     <div class="col-sm-5 centerDiv">
       <div class="col-sm-12 competitionTitle centerText">
         <?php echo $row['Name'] ?>
       </div>
       <div>
         <img src="<?php echo $row['Path'] ?>" class="img-responsive">
       </div>
       <div class="competitionDescription centerText">
         <?php echo $row['Description'] ?>
       </div>
     </div>
    </div>
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
