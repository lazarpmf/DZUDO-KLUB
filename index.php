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

  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 450px; margin-top: 100px;">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" style="height: 450px;">
      <div class="item active">
        <img src="img/cover1.jpg" alt="Los Angeles" style="margin: 0 auto; height: 450px; width: 100%;">
      </div>

      <div class="item">
        <img src="img/cover2.png" alt="Chicago" style="margin: 0 auto;">
      </div>

      <div class="item">
        <img src="img/cover3.jpg" alt="New York" style="margin: 0 auto;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left fa fa-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right fa fa-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="align-center">
            <i class="fa fa-question fa-5x mar-bot20"></i>
            <h4 class="text-bold">Sta treba znati?</h4>
            <p>Od legendarne džiju džice do olimpijskog borilačkog sporta protezao se razvojni put džudoa. Još su drevni kineski mudraci znali da slabiji može da pobedi jačeg, ako popusti. Na mudrosti «popusti da bi pobedio», gde do izražaja dolazi više veština nego snaga, zasnovane su brojne škole džiju džice (pravilnije džu džucu), koje su bile deo obuke samuraja za borbu bez oružja. Kada se u drugoj polovini 19. veka u Japanu proširila upotreba vatrenog oružja, zlatno doba džu džucu i drugih borilačkih veština našlo se na zalasku.
            </p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <i class="fa fa-users fa-5x mar-bot20"></i>
            <h4 class="text-bold">Psiho-fizicki razvoj djece</h4>
            <p>Kroz džudo, kao sredstvo psiho-fizičkog vaspitanja, deca se uče da svet oko sebe ne posmatraju odvojeno kao sliku na zidu, veće da vide i sebe u tom svetu. Takvo posmatranje ukazuje im da uzroke nesporazuma na treba tražiti samo u svetu koji ih okružuje, već često u njima samima. U džudou vaspitanje vremenom prelazi u samo-vaspitanje koje, kada se začne u detinjstvu, može izvajati još lepše oblike vaspitanja, jer traje i posle osamostaljenja.
            </p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <i class="fa fa-arrow-down fa-5x mar-bot20"></i>
            <h4 class="text-bold">Dzudo kate</h4>
            <p>
                Nage No Kata / kata bacanja <br>
                Katame No Kata / kata zahvata kontrole <br>
                Kime No Kata / kata odbrane <br>
                Ju No Kata / kata mekoće <br>
                Gonosen No Kata / kata kontra bacanja <br>
                Koshiki No Kata / kata starih formi <br>
                Icucu No Kata / kata pet elemenata <br>
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- spacer section:testimonial -->
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
								Džudo je borilačka veština i olimpijski sport nastao kao skup probranih tehnika iz džijudžicua. Džijudžicu je u to vreme u Japanu bilo zajedničko ime za sve borilačke veštine (udaračke i rvačke). Tada je osnivač džudoa - Džigoro Kano (嘉納治五郎), koji je savladao nekoliko stilova Džijudžicua, odlučio uzeti ono najbolje od svake i odbaciti nepotrebno.
							</h5>
             
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- about -->
  <section id="section-about" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Naši treneri</h2>
            <p></p>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member1.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Marko Markovic</h4>
              <span>Trener petlica</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member2.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Petar Petrovic</h4>
              <span>Trener pionira</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member3.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Jovan Jovanovic</h4>
              <span>Trener juniora</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member4.jpg" alt="" /></figure>
            <div class="team-detail">
              <h4>Ivan Ivanovic</h4>
              <span>Trener kadeta</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /about -->



  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Galerija</h2>
            <p></p>
          </div>
        </div>
      </div>

      <div class="row">
       
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <img src="img/portfolio/img1.jpg" alt="" />
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                     
                      <a href="img/portfolio/img1.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img2.jpg" alt="" />
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                     
                      <a href="img/portfolio/img2.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>


              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img3.jpg" alt="" />
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                     
                      <a href="img/portfolio/img3.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img4.jpg" alt="" />
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                     
                      <a href="img/portfolio/img4.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

               <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img5.jpg" alt="" />
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                     
                      <a href="img/portfolio/img5.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

               <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img6.jpg" alt="" />
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                     
                      <a href="img/portfolio/img4.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

            </div>

          </div>


        </div>
      </div>

    </div>
  </section>
  <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
    <div class="align-center pad-top40 pad-bot40">
      <blockquote class="bigquote color-white">Judo helps us to understand that worry is waste of energy</blockquote>
      <p class="color-white"></p>
    </div>
  </section>
<section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d23553.22321492402!2d19.24422343991572!3d42.44576272688435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x134deb2e3284f4d5%3A0xd29876986e5583bd!2sNormal%2C+Podgorica%2C+Montenegro!3m2!1d42.4441415!2d19.246448!5e0!3m2!1sen!2s!4v1528468315068" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Kontaktirajte nas</h2>
            <p> </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="cform" id="contact-form">
            <div id="sendmessage">
              Your message has been sent. Thank you!
            </div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <label for="name">Vaše ime</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Vaše ime" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label for="email">Vaš Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Vaš Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label for="message">Poruka</label>
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validation"></div>
              </div>

              <button type="submit" class="btn btn-theme pull-left">Pošalji poruku</button>
            </form>

          </div>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>
  <!-- map -->
  <section id="section-map" class="clearfix">
    
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
