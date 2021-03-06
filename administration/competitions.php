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
    <div style="margin-left: 50px; margin-right: 50px;">
      <div>
        <a href="addCompetition.php">
          <button type="button" class="btn btn-success"> + Novo</button>
        </a>
      </div>
      
      <table>
        <tr>
          <th>NAZIV</th>
          <th>OPIS</th>
          <th></th>
          <th></th>
        </tr>

        <?php
          $sql = "SELECT CompetitionID, Name, Description
                  FROM competitions
                  ORDER BY CompetitionID DESC";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result);
          
          while($row) {
        ?>    
            <tr>
              <td><?php echo $row['Name']; ?></td>
              <td><?php echo $row['Description']; ?></td>
              <td> <a href="editCompetition.php?id=<?php echo $row['CompetitionID']; ?>"><button class="btn btn-success">Izmijeni</button></a></td>
              <td> <a class="confirm" href="scripts/deleteCompetition.php?id=<?php echo $row['CompetitionID']; ?>"><button class="btn btn-danger">Bri??i</button></a></td>
            </tr>
        <?php   
            $row = mysqli_fetch_array($result);
          }
        ?>

      </table>

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