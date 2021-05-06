<?php 
  include('scripts/connection.php');
  session_start();
?>
<!DOCTYPE html>
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
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
  </style>
</head>

<body>
  <section id="header" class="appear"></section>
  <?php include 'menu.php'; ?>
  <div class="container" style="margin-top: 150px;">
    <form action="scripts/editSection.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
    
      <?php
          $id = $_GET['id'];
          $sql = "SELECT Name, Coach, Terms, Description
                  FROM sections
                  WHERE SectionID=".$id;
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result);
        ?>

    <div class="main col-sm-6">    
      <input id="name" name="name" class="input form-control" value="<?php echo $row['Name'];?>" style="margin-bottom: 10px;">
      <input id="coach" name="coach" class="input form-control" value="<?php echo $row['Coach'];?>" style="margin-bottom: 10px;">
      <input id="terms" name="terms" class="input form-control" value="<?php echo $row['Terms'];?>" style="margin-bottom: 10px;">
        <textarea id="description" name="description" class="input form-control" style="margin-bottom: 10px;" rows="5"><?php echo $row['Description'];?></textarea>
      <input type="submit" class="btn btn-success" id="editSection" name="editSection" value="Izmijeni">        
    </div>    
  </form>
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