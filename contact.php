
<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Contact Us &mdash; 39 Youth Club Bognor</title>
  <meta name="description" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS & JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css"><!-- reset file do not change -->
  <link rel="stylesheet" href="css/skeleton.css"><!-- framework CSS -->
  <link rel="stylesheet" href="css/style.css"><!--my additions-->
  <link rel="stylesheet" href="css/breaks.css"><!--breakpoints of mine-->

  <script>document.createElement('main');</script><!--fix for support of HTML5 <main> element-->

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Google fonts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <!--<link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet"><!--Bench Nine Google Font for headers-->
</head>

<body>
    
    <div class="container">
        
        <nav class="nav-top z-1" role="navigation"><!--Start of top information area-->
            <ul>
                <li><a href="sitemap/">Sitemap</a></li>
                <li><img class="logo-fb-small" src="" /><a href="https://www.facebook.com/39clubbognorregis/">@39ClubBognorRegis</a></li>
                <li><img class="logo-fb-small" src="" /><a href="https://www.facebook.com/39youthclub/">@39YouthClub</a></li>
            </ul>
        </nav><!--End of top information area-->
        
        <div class="overflow-killer"><!--Needed to stop absolutely positioned elements from exploding outside of the container area, specifically for this bit, also influences height-->
            <div aria-hidden="true" class="corner"></div><!--Covers up any gaps above the slanted header area-->
            
            <section class="address z-1" role="complementary">
                <div class="address-p"><?php perch_content('Address'); ?>
                    <p class="address-p-bottom">TEL:  01243 864124 <span class="address-charity"><a href="<?php perch_content('Charity commission link'); ?>">Registered Charity No. 305344</a></span></p>
                </div>
            </section>
            
            <header role="banner"><!--Start of header area containing website title, graphics and navigation etc-->
                <img class="left logo" src="img/logo.png" />

                <h1 class="header-title smallcaps"><em>39 Youth Club</em></h1>

                <nav class="nav-main" role="navigation"><!--Main navigation start-->
                  <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Events</a></li>
                    <li><a href="">Times &amp; Dates</a></li>
                    <li><a href="">Join Us</a></li>
                    <li><a href="">Volunteer</a></li>
                    <li><a href="">Contact Us</a></li>
                  </ul>
                </nav><!--Main navigation ends-->
            </header><!--Header area ends-->

            
        </div>
        
        
        
    </div>


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <main class="container clear overflow-hidden" role="main" style="background: blue; color: white;"><!--Container for ALL content, everything inside this-->
        <p>Container begins</p>

        <article class="content" role="article" style="color: black;">
            <h3 class="content-title" style="color: black;">Contact Us</h3>
            
            <div class="row content-row">
            
                <div class="four columns" style="background: red;">
                    <section class="textmid2 twelve columns" style="background: green;">
                        <h3 class="content-subtitle">Contact Details</h3>

                        <?php perch_content('Contact basic details'); ?>
                    </section>

                    <section class="twelve columns" style="background: pink;">
                        <h3 class="content-subtitle">Our Address</h3>

                        <h4><?php perch_content('Address'); ?></h4>
                    </section>
                </div>
                
                <div class="eight columns">
                    <section class="twelve columns textmid3 bold" style="background: yellow;">
                        <h3 class="content-subtitle">Contact Form</h3>
                        
                        <a class="link-nostyle" href="<?php perch_content('Contact form link'); ?>">
                            <div class="form-button" style="background: pink;">
                                <p class="italics form-button-text">Get in contact with us! &gt;&gt;</p>
                            </div>
                        </a>
                    </section>
                    <section class="twelve columns textmid3" style="background: yellow;">
                        <h3 class="content-subtitle">Location Map</h3>
                        
                        <br />

                        <div class="eight columns centre offset-by-two" style="background: red;">
                            <a class="link-nostyle" href="https://www.google.com/maps/place/39+Youth+Club/@50.7865505,-0.6727951,17z/data=!3m1!4b1!4m5!3m4!1s0x4875ac46ce88a697:0x5998d98a2480d2fe!8m2!3d50.7865505!4d-0.6706064">
                                <img
                                    alt="Image of a map to our location"
                                    class="boxshadow-softextra6 fluid-100 margin-4-top"
                                    role="img"
                                    src="perch/resources/map.jpg"
                                >
                                <p class="centre">(Source: Google Maps)</p>
                            </a>                    
                        </div>
                </section>
                </div>
                
            </div>
            
            <div class="row content-row">
                
            </div>
        </article>
    </main>

      <!--Purely graphical slanted area with drop shadow at bottom of main content-->
      <div aria-hidden="true" class="containerbottom"  style="background: red;">
          <div class="containerbottomgraphic" style="background: mediumpurple;"></div>
          
          <p style="float: right;">End of .containerbottom</p>
      </div>
  </div><!--END OF CONTAINER-->
  
  <footer role="complementary" style="background: orange;">
      <section class="footer-link-scyp" role="navigation" style="background: cyan;"><a href="<?php perch_content('SCYP logo link'); ?>"><img src="" alt="Sussex Clubs for Young People" /></a></section>
  
      <ul class="footer-links" role="navigation" style="background: green;">
          <li style="background: yellow;"><a href="">Home</a></li>
          <li style="background: yellow;"><a href="events/">About Us</a></li>
          <li style="background: yellow;"><a href="diary/">History</a></li>
          <li style="background: yellow;"><a href="news/">Our Policies</a></li>
          <li style="background: yellow;"><a href="videos/">Events</a></li>
          <li style="background: yellow;"><a href="admin/">Times &amp; Dates</a></li>
          <li style="background: yellow;"><a href="findus/">Join Us</a></li>
          <li style="background: yellow;"><a href="findus/">Volunteer</a></li>
          <li style="background: yellow;"><a href="findus/">Contact Us</a></li>
      </ul>
  
      <br />
      
      <section class="footer-links-box" role="navigation" style="background: olive;">
          <div class="footer-links-box-inner" style="background: green;">
              <a href="<?php perch_content('WSCC logo link'); ?>">
                  <div class="footer-link-wscc" style="background: yellow;">
                  </div>
              </a>
              <a href="<?php perch_content('Bognor Regis Town Council logo link'); ?>">
                  <div class="footer-link-brtc" style="background: blue;">
                  </div>
              </a>
              <a href="<?php perch_content('Lottery logo & link'); ?>">
                  <div class="footer-link-lottery" style="background: purple;">
                  </div>
              </a>
              <a href="<?php perch_content('FB main link'); ?>">
                  <div class="footer-link-fb" style="background: pink;">
                  </div>
              </a>
              <a href="<?php perch_content('FB Friends of 39 Club link'); ?>">
                  <div class="footer-link-fb" style="background: pink;">
                  </div>
              </a>
          </div>
      </section>
  
      <section class="clear" role="contentinfo"><!--Copyright info etc-->
          <p><strong>&copy; <?php echo date('Y'); ?> 39 Youth Club Bognor | Designed by <a href="http://www.paulcomputerhelp.co.uk/">Paul Robinson</a></strong>
              
          <p class="padding-none margin-none"><a href="<?php perch_content('Charity commission link'); ?>">Registered Charity No. 305344</a></p>
          
          <p class="centre padding-none margin-none">(All identifiable pictures of children used with permission of parents)</p>
  
          <br />
          <br />
  
          <a href="perch/">Perch Login</a></p>
      </section>
  
      <br />
      <br />
      <br />
  </footer>
  
      <!--JavaScript-->
  
          
    
          <script>document.createElement('main');</script><!--fix for support of HTML5 <main> element-->
    
      <!--End JavaScript-->
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </body>
  </html>
  
