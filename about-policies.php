        
        <?php include('perch/runtime.php'); ?>
        
        <!DOCTYPE html>
        
        <html lang="en">
        
        <head>
          <!-- Basic Page Needs
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
          <meta charset="utf-8">
          <title>About Us &mdash; 39 Youth Club Bognor</title>
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
                        <li><img src="" style="width: 25px; height: 25px; vertical-align: middle;" /><a href="https://www.facebook.com/39youthclub/">@39YouthClub</a></li>
                    </ul>
                </nav><!--End of top information area-->
                
                <div class="overflow-killer"><!--Needed to stop absolutely positioned elements from exploding outside of the container area-->
                    <div aria-hidden="true" class="corner"></div><!--Covers up any gaps above the slanted header area-->
                    
                    <section class="address z-1" role="complementary" style="background: cyan;">
                        <div class="address-p"><?php perch_content('Address'); ?>
                            <p style="margin: 0; padding: 0 0 0 1.8rem;">TEL:  01243 864124 <span class="address-charity"><a href="<?php perch_content('Charity commission link'); ?>">Registered Charity No. 305344</a></span></p>
                        </div>
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
                <p class="quote-text-smaller">Favourite things:<br />
                    "Baking and playing with my friends"<br />
                <span class="quote-name">- Mercedes</span></p>
            </div>
        
            <main class="container clear overflow-hidden" role="main" style="background: blue; color: white;"><!--Container for ALL content, everything inside this-->
                <p>Container begins</p>
                
                <section class="about-top" role="complementary">
                    <h1 class="content-title-top" style="background: orange;">About Us</h1>
        
                    <ul class="about-top-nav bold italics margin-none smallcaps padding-none textmid35" role="navigation" style="background: pink;">
                        <li class="inline-block"><a href="">About Us</a> &gt;&gt;</li>
                        <li class="inline-block padding-3-left"><a href="">History </a> &gt;&gt;</li>
                        <li class="inline-block padding-3-left"><a href="">Our Policies</a> &gt;&gt;</li>
                    </ul>
                </section>
        


        
        <article class="content" role="article">
            <div class="content-row row">
                <section class="bold ten columns offset-by-one textmid3" role="main" style="background: yellow; color: black;">
                    <h3 class="content-title">Our Policies</h3>
                    
                    <?php perch_content('Policies blurb'); ?>
                    
                    <?php perch_content('Policies files'); ?>
                </section>
            </div>
        </article>
        
      <p class="clear">End of container</p>
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
          <li style="background: yellow;"><a href="admin/">Time &amp; Dates</a></li>
          <li style="background: yellow;"><a href="findus/">Join Us</a></li>
          <li style="background: yellow;"><a href="findus/">Volunteer</a></li>
          <li style="background: yellow;"><a href="findus/">Contact Us</a></li>
          <li style="background: yellow;"><a href="findus/">Room Hire</a></li>
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
              
          <p><a href="<?php perch_content('Charity commission link'); ?>">Registered Charity No. 305344</a></p>
          
          <p><?php perch_content('Address'); ?></p>
          
          <p class="centre">(All identifiable pictures of children used with permission of parents)</p>
  
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
  
