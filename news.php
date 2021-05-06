<?php
  session_start();
?><!DOCTYPE html>
<html ng-app="angularTable">

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
  <script type="text/javascript" src="js/angular.js"></script>
</head>

<body ng-controller="listdata">
  <section id="header" class="appear"></section>
  <?php include 'menu.php'; ?>

 
<section class="firstSection">
  <div class="container">
    <div class="row competitionRowDiv">
       <div class="col-sm-4 col-xs-4" dir-paginate="one in news|itemsPerPage:6|filter:searchInput" style="padding-bottom: 40px;">
               <a href="singleNews.php?id={{one.NewsID}}">

                      <div class="col-sm-12" style="height: 300px; ">
                          <img src="img/{{ one.Path }}" class="img-responsive" style="width: 100%; height: 100%; object-fit: cover; ">
                      </div>

                      <div class="col-sm-12" style="text-align: center;">
                         <span style="color: black; font-size: 18px;"> {{one.Headline}} </span>
                      </div>
               </a>
          </div>
    </div>
     <div class="row">
        <div class="col-sm-8" style="margin: 0 auto; float: none; margin-top: 20px; text-align: center;">
             <dir-pagination-controls
                  max-size="5"
                  direction-links="true"
                  boundary-links="true" >
              </dir-pagination-controls>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 centerDiv">
          <input type="text" ng-model="searchInput" class="form-control" placeholder="Pretaga clanaka" style="margin-bottom: 10px;">
        </div>
      </div>
   </div>
   <div class="row">
        <div class="col-sm-3 centerDiv">
          <form action="https://www.google.com/search" method="GET">
            <label for="google">Pretazi google</label> <input type="text" id="google" name="q" class="form-control" placeholder="Pretaga" style="margin-bottom: 10px;">
             <input type="submit" name="submit" value="pretaga" class="btn btn-danger">
         </form>

         <form action="https://search.yahoo.com/search" method="GET">
           <label for="yahoo">Pretazi yahoo</label> <input type="text" id="yahoo" name="p" class="form-control" placeholder="Pretaga" style="margin-bottom: 10px;">
           <input type="submit" name="submit" value="pretaga" class="btn btn-danger">
         </form>

        </div>
      </div>
   </div>
</section>


  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/dirPagination.js"></script>
  <script src="js/app.js"></script>
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
