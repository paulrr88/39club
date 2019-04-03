
<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Volunteer &mdash; 39 Youth Club Bognor</title>
  <meta name="description" content="We’re very welcoming of volunteers at 39 Club and we’re always looking for new youth workers to come and join us. We do accept people pursuing their Prince of Edinburgh Award as well. Details of how to join our team are on this page!">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS & JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../css/normalize.css"><!-- reset file do not change -->
  <link rel="stylesheet" href="../css/skeleton.css"><!-- framework CSS -->
  <link rel="stylesheet" href="../css/style.css"><!--my additions-->
  <link rel="stylesheet" href="../css/breaks.css"><!--breakpoints of mine-->

  <script>document.createElement('main');</script><!--fix for support of HTML5 <main> element-->

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="../img/favicon.png">

</head>

<body>
    
    <div class="container">
        
        <nav class="nav-top z-1" role="navigation"><!--Start of top information area-->
            <ul>
                <li><a href="../sitemap/">Sitemap</a></li>
                <li><img alt="Facebook logo" class="logo-fb-small" src="../img/fb.png" /><a href="https://www.facebook.com/39clubbognorregis/" title="Follow us on Facebook!">@39ClubBognorRegis</a></li>
                <li><img alt="Facebook logo" class="logo-fb-small" src="../img/fb.png" /><a href="https://www.facebook.com/39youthclub/" title="Follow us on Facebook!">@39YouthClub</a></li>
            </ul>
        </nav><!--End of top information area-->
        
        <div class="overflow-killer" role="banner"><!--Needed to stop absolutely positioned elements from exploding outside of the container area, specifically for this bit, also influences height-->
            <div aria-hidden="true" class="corner"></div><!--Covers up any gaps above the slanted header area-->
            
            <section class="address z-1" role="complementary">
                <div class="address-p"><?php perch_content('Address'); ?>
                    <p class="address-p-bottom">TEL:  01243 864124 <span class="address-charity"><a href="<?php perch_content('Charity commission link'); ?>">Registered Charity No. 305344</a></span></p>
                </div>
            </section>
            
            <header><!--Start of header area containing website title, graphics and navigation etc-->
                <img aria-hidden="true" alt="39 Club logo" class="left logo" src="../img/logo.png" />

                <h1 class="header-title smallcaps"><em>39 Youth Club</em></h1>

                <nav class="nav-main" role="navigation"><!--Main navigation start-->
                  <ul>
                    <li><a href="../">Home</a></li>
                    <li><a href="../about/">About Us</a></li>
                    <li><a href="../events/">Events</a></li>
                    <li><a href="../diary/">Times &amp; Dates</a></li>
                    <li><a href="../join/">Join Us</a></li>
                    <li><a href="../support/">Support Us</a></li>
                    <li><a href="../volunteer/">Volunteer</a></li>
                    <li><a href="../contact/">Contact Us</a></li>
                  </ul>
                </nav><!--Main navigation ends-->
            </header><!--Header area ends-->
            
        </div>
        
    </div>


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <main class="container clear overflow-hidden"><!--Container for ALL content, everything inside this-->
        <h1 class="content-title-top content-title-pagetop" role="heading">Volunteer with 39 Club</h1>
        
        <article class="content textmid3 bold" role="main">
            <div class="perch-textblock" role="complementary">
                <?php perch_content('Volunteer blurb'); ?>
            </div>
            
            <a class="link-nostyle" href="<?php perch_content('Volunteer form'); ?>">
                <div aria-label="Download volunteering PDF" class="form-button" role="navigation">
                    <p class="italics form-button-text">Volunteer Form (PDF) &gt;&gt;</p>
                </div>
            </a>
            
            <br />
        </article>
    </main>

      <!--Purely graphical slanted area with drop shadow at bottom of main content-->
      <div aria-hidden="true" class="containerbottom">
          <div class="containerbottomgraphic"></div>
      </div>
  </div><!--END OF CONTAINER-->
  
  <footer role="contentinfo">
      <div class="footer-link-scyp-box">
          <a href="<?php perch_content('SCYP logo link'); ?>" title="Sussex Clubs for Young People"><section class="footer-link-scyp" role="img"></section></a>
      </div>
      
      <section role="navigation">
          <ul class="footer-links bold italics smallcaps textmid2">
              <li><a href="../">Home</a></li>
              <li><a href="../about/">About Us</a></li>
              <li><a href="../about/history/">History</a></li>
              <li><a href="../about/policies/">Our Policies</a></li>
              <li><a href="../events/">Events</a></li>
              <li><a href="../diary/">Times &amp; Dates</a></li>
              <li><a href="../join/">Join Us</a></li>
              <li><a href="../support/">Support Us</a></li>
              <li><a href="../volunteer/">Volunteer</a></li>
              <li><a href="../contact/">Contact Us</a></li>
          </ul>
      </section>
  
      <br />
      
      <section class="footer-links-box" role="contentinfo">
          <div class="footer-links-box-inner">
              <p class="bold centre smallcaps italics">Supported by:<br /> 
                  <a href="<?php perch_content('WSCC logo link'); ?>">West Sussex County Council</a>,<br /> 
                  <a href="<?php perch_content('Bognor Regis Town Council logo link'); ?>">Bognor Regis Town Council</a>,<br /> 
                  <a href="<?php perch_content('Bersted logo link'); ?>">Bersted Parish Council</a>,<br /> 
                  <a href="<?php perch_content('Lions Club logo link'); ?>">Bognor Regis Lions Club</a></p>
              <div class="row">
                  <a href="<?php perch_content('WSCC logo link'); ?>" title="West Sussex County Council" style="visibility: hidden;">
                      <div class="footer-link-wscc" role="img"></div>
                  </a>
                  <a href="<?php perch_content('Bognor Regis Town Council logo link'); ?>" title="Bognor Regis Town Council">
                      <div class="footer-link-brtc" role="img"></div>
                  </a>
                  <a href="<?php perch_content('Bersted logo link'); ?>" title="Bersted Parish Council">
                      <div class="footer-link-bpc" role="img"></div>
                  </a>
                  <a href="<?php perch_content('Lions Club logo link'); ?>" title="Bognor Regis Lions Club">
                      <div class="footer-link-lions" role="img"></div>
                  </a>
              </div>
              
              <div class="row footer-link-lottery-container">
                  <a href="<?php perch_content('Lottery link'); ?>" title="The National Lottery Community Fund">
                      <div class="footer-link-lottery" role="img"></div>
                  </a>
              </div>
              
              <div class="row footer-link-fb-container">
                  <a href="<?php perch_content('FB main link'); ?>" title="Follow us on Facebook!">
                      <div class="footer-link-fb" role="img"></div>
                      <p class="left footer-link-fb-text">@39ClubBognorRegis</p>
                  </a>
                  <a href="<?php perch_content('FB Friends of 39 Club link'); ?>" title="Follow us on Facebook!">
                      <div class="footer-link-fb" role="img"></div>
                      <p class="left footer-link-fb-text">@39YouthClub</p>
                  </a>
              </div>
          </div>
      </section>
  
      <section class="clear" role="contentinfo"><!--Copyright info etc-->
          <p><strong>&copy; <?php echo date('Y'); ?> 39 Youth Club Bognor | Designed by <a href="http://www.paulcomputerhelp.co.uk/">Paul Robinson</a></strong>
              
          <p class="padding-none margin-none"><a href="<?php perch_content('Charity commission link'); ?>">Registered Charity No. 305344</a></p>
          
          <p class="centre padding-none margin-none">(All identifiable pictures of children used with permission of parents)</p>
  
          <br />
          <br />
  
          <a href="../perch/">Perch Login</a></p>
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
  
