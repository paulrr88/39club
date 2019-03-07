
<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Times &amp; Dates &mdash; 39 Youth Club Bognor</title>
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
                <li><img class="logo-fb-small" src="img/fb.png" /><a href="https://www.facebook.com/39clubbognorregis/">@39ClubBognorRegis</a></li>
                <li><img class="logo-fb-small" src="img/fb.png" /><a href="https://www.facebook.com/39youthclub/">@39YouthClub</a></li>
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


    <div aria-hidden="true" class="quote-circle quote-pos-dates">
        <p class="quote-text">"I like spending time with my friends"<br />
        <span class="quote-name">- Kiera</span></p>
    </div>

    <main class="container clear overflow-hidden" role="main"><!--Container for ALL content, everything inside this-->
        <h1 class="content-title-top content-title-pagetop">Times &amp; Dates</h1>
        
        <article class="content" role="article">
            <div class="content-row row">
                <section class="bold ten columns offset-by-one textmid3" role="main">
                    
                    <table class="table" summary="Table of upcoming dates">
                        <thead class="diarytop">
                            <tr>
                                <th class="centre" scope="col">Date</th>
                                <th class="centre" scope="col">Event</th>
                                <th class="centre" scope="col">Activities</th>
                            </tr>
                        </thead>
                        <tbody class="diary">
                            <?php perch_content('Diary'); ?>
                        </tbody>
                    </table>
                    
                </section>
            </div>
        </article>
    </main>

      <!--Purely graphical slanted area with drop shadow at bottom of main content-->
      <div aria-hidden="true" class="containerbottom">
          <div class="containerbottomgraphic"></div>
      </div>
  </div><!--END OF CONTAINER-->
  
  <footer role="complementary">
      <a href="<?php perch_content('SCYP logo link'); ?>" title="Sussex Clubs for Young People"><section class="footer-link-scyp" role="navigation"></section></a>
  
      <ul class="footer-links bold italics smallcaps textmid2" role="navigation">
          <li><a href="">Home</a></li>
          <li><a href="events/">About Us</a></li>
          <li><a href="diary/">History</a></li>
          <li><a href="news/">Our Policies</a></li>
          <li><a href="videos/">Events</a></li>
          <li><a href="admin/">Times &amp; Dates</a></li>
          <li><a href="findus/">Join Us</a></li>
          <li><a href="findus/">Volunteer</a></li>
          <li><a href="findus/">Contact Us</a></li>
      </ul>
  
      <br />
      
      <section class="footer-links-box" role="navigation">
          <div class="footer-links-box-inner">
              <div class="row">
                  <a href="<?php perch_content('WSCC logo link'); ?>" title="West Sussex County Council">
                      <div class="footer-link-wscc"></div>
                  </a>
                  <a href="<?php perch_content('Bognor Regis Town Council logo link'); ?>" title="Bognor Regis Town Council">
                      <div class="footer-link-brtc"></div>
                  </a>
                  <a href="<?php perch_content('Bersted logo link'); ?>" title="Bersted Parish Council">
                      <div class="footer-link-bpc"></div>
                  </a>
                  <a href="<?php perch_content('Lions Club logo link'); ?>" title="Bognor Regis Lions Club">
                      <div class="footer-link-lions"></div>
                  </a>
              </div>
              
              <div class="row footer-link-lottery-container">
                  <a href="<?php perch_content('Lottery link'); ?>" title="The National Lottery Community Fund">
                      <div class="footer-link-lottery"></div>
                  </a>
              </div>
              
              <div class="row footer-link-fb-container">
                  <a href="<?php perch_content('FB main link'); ?>" title="Follow us on Facebook!">
                      <div class="footer-link-fb"></div>
                      <p class="left">@39ClubBognorRegis</p>
                  </a>
                  <a href="<?php perch_content('FB Friends of 39 Club link'); ?>" title="Follow us on Facebook!">
                      <div class="footer-link-fb"></div>
                      <p class="left">@39YouthClub</p>
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
  
          <a href="perch/">Perch Login</a></p>
      </section>
  
      <br />
      <br />
      <br />
  </footer>
  
      <!--JavaScript-->
  
          <script>
      // DELETE THIS IF NOT NEEDED ON THIS PAGE
      // fix for mobile table layout from http://sitesforprofit.com/responsive-tables-in-wordpress
    
      var headertext = [];
      var headers = document.querySelectorAll("thead");
      var tablebody = document.querySelectorAll("tbody");
    
      for (var i = 0; i < headers.length; i++) {
        headertext[i]=[];
        for (var j = 0, headrow; headrow = headers[i].rows[0].cells[j]; j++) {
          var current = headrow;
          headertext[i].push(current.textContent);
          }
      }
    
      for (var h = 0, tbody; tbody = tablebody[h]; h++) {
        for (var i = 0, row; row = tbody.rows[i]; i++) {
          for (var j = 0, col; col = row.cells[j]; j++) {
            col.setAttribute("data-th", headertext[h][j]);
          }
        }
      }
    </script>
    
          <script>document.createElement('main');</script><!--fix for support of HTML5 <main> element-->
    
      <!--End JavaScript-->
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </body>
  </html>
  
