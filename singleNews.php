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
  <?php include 'phpScripts/connection.php'; $id = $_GET['id']; $sql = "SELECT * FROM news C inner join images I on I.ImageID = C.ImageID WHERE C.NewsID = '$id' "; $result = mysqli_query($conn, $sql); $row = mysqli_fetch_array($result); ?>

 
<section class="firstSection">
  <div class="container">
    <div class="row competitionRowDiv">
     <div class="col-sm-5 centerDiv">
       <div class="col-sm-12 competitionTitle centerText">
         <?php echo $row['Headline'] ?>
       </div>
       <div>
         <img src="img/<?php echo $row['Path'] ?>" class="img-responsive">
       </div>
       <div class="competitionDescription centerText">
         <?php echo $row['Text'] ?>
       </div>
       <div class="comments centerText">
         <p>KOMENTARI</p>
         <div>
          <form action="phpScripts/addComment.php?newsID=<?php echo $_GET['id']; ?>" method="POST" style="display: <?php if(isset($_SESSION['UserID'])){echo 'block;';} else{ echo 'none;'; }?>">
            
             <textarea class="form-control" name="comment" style="margin-bottom: 10px;" placeholder="Vas komentar"></textarea>
             <input type="submit" name="submit" class=" form-control btn btn-danger" style="float: right: ;" value="Dodaj komentar" >
           </form>
           <div class="errorMessage" style="display: <?php if(isset($_SESSION['UserID'])){echo 'none;';} else{ echo 'block;'; }?>">
             Samo ulogovani korisnici imaju pravo da ostavljaju komentar.
           </div>
           <?php $sql = "SELECT * from news n inner join comment c on c.NewsID = n.NewsID inner join userpass u ON u.UserID = c.UserID WHERE n.NewsID = '".$_GET['id']."' ORDER BY c.CommentID DESC"; $result=mysqli_query($conn, $sql); ?>
            <table class="table">
              <thead>
                <th>
                  Ime i prezime 
                </th>
                <th>
                  Komentar
                </th>
                <th>
                  Datum
                </th>
                <?php if(isset($_SESSION['IsAdmin']) && $_SESSION['IsAdmin']==1){ ?>
                  <th>Brisi</th>
                <?php } ?>
              </thead>
              <?php while($row = mysqli_fetch_array($result)){?>
                <tr>
                  <td><?php echo $row['FirstName']?> <?php echo $row['LastName']?></td>
                  <td><?php echo $row['Comment']?></td>
                  <td><?php echo $row['CreatedComment']?></td>
                   <?php if(isset($_SESSION['IsAdmin']) && $_SESSION['IsAdmin']==1){ ?>
                  <th><a href="phpScripts/deleteComment.php?commentID=<?php echo $row['CommentID']?>&news=<?php echo $_GET['id']?>">Brisi</a></th>
                <?php } ?>
                </tr>
              <?php } ?>
            </table>
         </div>
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
