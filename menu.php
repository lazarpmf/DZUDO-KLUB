<div class="navbar navbar-fixed-top navbar-inverse" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
        <h1><a class="navbar-brand" href="index.php" data-0="line-height:90px;" data-300="line-height:50px;">			Džudo Klub
					</a></h1>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li><a href="index.php">Naslovna</a></li>
          <li><a href="sections.php">Sekcije</a></li>
          <li><a href="competitions.php">Takmičenja</a></li>
          <li><a href="news.php">Novosti</a></li>
          <li><a href="about.php">O sajtu</a></li>
          <?php 
          if (isset($_SESSION['Username'])) {
            if ($_SESSION['IsAdmin']!=0) {
        ?>
        <li><a class="page-scroll" href="administration/index.php">Administracija</a></li>
            <?php }?>
        <li><a class="page-scroll" href="administration/scripts/logOut.php">Log Out</a></li>
        <?php
          } else {
        ?>
        <li><a href="administration/logIn.php">Log In</a></li>
        <?php
          }
        ?>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>