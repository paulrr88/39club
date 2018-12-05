
<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Home &mdash; 39 Youth Club Bognor</title>
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
    
    <div class="container" style="background: purple;">
        
        <nav class="nav-top z-1" role="navigation" style="background: none;"><!--Start of top information area-->
            <ul>
                <li><a href="sitemap/">Sitemap</a></li>
                <li><img src="" style="width: 25px; height: 25px; vertical-align: middle;" /><a href="https://www.facebook.com/39clubbognorregis/">@39ClubBognorRegis</a></li>
            </ul>
        </nav><!--End of top information area-->
        
        <div class="overflow-killer"><!--Needed to stop absolutely positioned elements from exploding outside of the container area-->
            <div aria-hidden="true" class="corner"></div><!--Covers up any gaps above the slanted header area-->
            
            <section class="address z-1" role="complementary" style="background: cyan;">
                <p class="address-p"><?/*php perch_content('Address');*/ ?>
                    Church Path,
                    Glamis Street,
                    Bognor Regis PO21 1DB<br />
                    TEL:  01243 864124<br />
                    <span class="address-charity">Registered Charity No. #########</span>
                </p>
            </section>
            
            <header role="banner"><!--Start of header area containing website title, graphics and navigation etc-->
                <img class="left logo" src="img/logo.png" />

                <h1 style="background: pink;" class="header-title smallcaps"><em>39 Youth Club</em></h1>

                <nav class="nav-main" role="navigation"><!--Main navigation start-->
                  <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Events</a></li>
                    <li><a href="">Time &amp; Dates</a></li>
                    <li><a href="">Join Us</a></li>
                    <li><a href="">Volunteer</a></li>
                    <li><a href="">Contact Us</a></li>
                  </ul>
                </nav><!--Main navigation ends-->
            </header><!--Header area ends-->

            
        </div>


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


    <div aria-hidden="true" class="quote-circle">
        <p class="quote-text">"I love the activities and playing with my friends"<br />
        <span class="quote-name">- Tia</span></p>
    </div>

    <main class="container clear overflow-hidden" role="main" style="background: blue; color: white;"><!--Container for ALL content, everything inside this-->
        <p>Container begins</p>
        
        <article class="home-splash italics smallcaps" style="background: pink;">
            <section class="home-splash-left">
                <h1 class="home-splash-h1 italics margin-4-bottom smallcaps" style="background: cyan;">Fun<span>!</span> Games<span>!</span> Activities<span>!</span></h1>
                
                <p class="home-splash-text margin-none padding-none" style="background: brown;">39 Club offers somewhere for young people to go and find friendship and relax, with WiFi, music, TV, table tennis, table football, board games and crafts. Even cooking and outdoor activities! There’s something for everyone, and no-one gets turned away.<br />
                    
	               <span class="right"><a href="">Learn more &gt;&gt;</a></span></p>
            </section>
            <div class="home-splash-right" style="background: coral;"></div>
            <div aria-hidden="true" class="home-splash-image-container" style="background: none;">
              <div class="home-splash-image-parent" style="background: yellow;">
                <div class="home-splash-image-child"></div>
              </div>
            </div>
            <section class="home-splash-bottom" style="background: purple;">
                <h3 class="home-splash-bottom-h3 margin-20-right-per padding-none right">Tuesdays 4pm to 6pm (term time only)</h3>
                <h2 class="clear home-splash-bottom-h2 margin-22-right-per right">£1 entry <span class="padding-3-left">For 11-14 year olds</span></h2>
            </section>
        </article>
        
        <nav class="home-buttons" role="navigation" style="background: brown;">
            <div class="home-button home-button-contact" style="background: pink;">
                <p class="italics home-button-text">Contact Us &gt;&gt;</p>
            </div>
            <div class="home-button home-button-join" style="background: orange;">
                <p class="italics home-button-text">Join Us &gt;&gt;</p>
            </div>
            <div class="home-button home-button-vol" style="background: cyan;">
                <p class="italics home-button-text">Volunteer with Us &gt;&gt;</p>
            </div>
        </nav>
        
      <p class="clear">End of container</p>
    </main>

      <!--Purely graphical slanted area with drop shadow at bottom of main content-->
      <div aria-hidden="true" class="containerbottom"  style="background: red;">
          <div class="containerbottomgraphic" style="background: mediumpurple;"></div>
          
          <p style="float: right;">End of .containerbottom</p>
      </div>
  </div><!--END OF CONTAINER-->
  
  <footer role="complementary" style="background: orange;">
      <section class="footer-link-scyp" role="navigation" style="background: cyan;"><a href=""><img src="" alt="Sussex Clubs for Young People" /> <?php /*perch_content('SCYP Logo Link');*/ ?></a></section>
  
      <ul class="footer-links" role="navigation" style="background: green;">
          <li style="background: yellow;"><a href="">Home</a></li>
          <li style="background: yellow;"><a href="events/">About Us</a></li>
          <li style="background: yellow;"><a href="diary/">History</a></li>
          <li style="background: yellow;"><a href="news/">Our Policies</a></li>
          <li style="background: yellow;"><a href="videos/">Events</a></li>
          <li style="background: yellow;"><a href="admin/">Time &amp; Dates</a></li>
          <li style="background: yellow;"><a href="findus/">Join Us</a></li>
          <li style="background: yellow;"><a href="findus/">Volunteer</a></li>
          <li style="background: yellow;"><a href="findus/">Contact Us</a></li>
          <li style="background: yellow;"><a href="findus/">Room Hire</a></li>
      </ul>
  
      <br />
      
      <section class="footer-links-box" role="navigation" style="background: olive;">
          <div class="footer-links-box-inner" style="background: green;">
              <div class="footer-link-wscc" style="background: yellow;">
              </div>
              <div class="footer-link-brtc" style="background: blue;">
              </div>
              <div class="footer-link-lottery" style="background: purple;">
              </div>
              <div class="footer-link-fb" style="background: pink;">
              </div>
          </div>
      </section>
  
      <section class="clear" role="contentinfo"><!--Copyright info etc-->
          <p><strong>&copy; <?php echo date('Y'); ?> 39 Youth Club Bognor | Designed by <a href="http://www.paulcomputerhelp.co.uk/">Paul Robinson</a></strong>
              
          <p>Charity no: ########</p>
          
          <p>Address</p>
  
          <br />
          <br />
  
          <a href="perch/">Perch Login</a></p>
      </section>
  
      <br />
      <br />
      <br />
  </footer>
  
      
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </body>
  </html>
  
