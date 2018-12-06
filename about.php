        
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
                <div class="four columns">
                    <section class="bold twelve columns textmid2" role="complementary" style="background: purple;">
                        <?php /*perch_content('About Us Content 1');*/ ?>
                        <h3 class="content-title">Title for some content</h3>

                        <p>Body text would go here. Going to use some placeholder text:</p>

                        <p>Odio dapibus eleifend Maecenas magnis justo inceptos non lobortis pharetra lorem et ornare pretium eleifend. Primis in. Molestie sit tellus gravida. Ligula. Aliquam nec. Pretium ornare lectus ultrices euismod.</p>

                        <p>Nam aliquam ullamcorper. Duis sodales habitant. Quam amet magnis et senectus sociis nisl fringilla enim montes. Nonummy netus. A hendrerit montes adipiscing orci Sagittis. Praesent tortor senectus class. Mi Dis morbi congue sociis cubilia euismod porta. Nibh.</p>

                        <p>Sem sociosqu at at. Tempus. Neque nibh non phasellus elementum inceptos scelerisque nam, venenatis. Eget scelerisque vitae. Vel aliquam vulputate dolor augue porttitor tristique Vehicula placerat non hac. Duis duis vivamus non congue ultricies.</p>
                    </section>
                    
                    <section class="bold twelve columns margin-10-top-scale textmid2" role="complementary" style="background: green;">
                        <?php /*perch_content('About Us Content 3');*/ ?>

                        <h3 class="content-title">Title for yet more content</h3>

                        <p>Another example of a text area. Suspendisse nullam integer. Hac consectetuer dis massa duis aliquet justo velit iaculis blandit ultrices justo class conubia condimentum lacus. Dis dignissim justo suscipit.</p>

                        <p>Semper felis. Sociosqu tempor inceptos proin torquent phasellus purus ridiculus posuere aliquet montes ultricies facilisi tincidunt, morbi aliquet curabitur sollicitudin suspendisse. Commodo aliquet praesent consectetuer nisl id.</p>

                        <p>Habitasse mi erat neque vitae, lobortis. Tempor habitant consectetuer suspendisse. Sapien accumsan diam adipiscing in platea. Dui erat eget blandit cubilia nostra auctor habitasse habitant vestibulum felis cubilia mattis. Convallis nisl. Cubilia vestibulum dui praesent. Facilisis quisque nullam porttitor imperdiet. Sollicitudin nibh euismod dignissim Tempor luctus felis torquent velit. Hendrerit.</p>
                    </section>
                </div>
                <section class="bold eight columns textmid3" role="main" style="background: yellow; color: black;">
                    <?php /*perch_content('About Us Content 2');*/ ?>
                    
                    <h3 class="content-title">Title for some more content</h3>

                    <p class="italics smallcaps">Lobortis nam condimentum dapibus sem ridiculus. Sed, dui ac sodales turpis per felis dignissim pulvinar arcu, purus mus in, aenean mattis ligula. Nisi viverra hendrerit, ridiculus Dolor. Duis. Curabitur diam.</p>
                    
                    <img alt="Image of kids" src="" />

                    <p>Dapibus cum vestibulum est turpis at aliquam at urna. Donec et dapibus habitant, luctus. Augue euismod imperdiet, fames penatibus leo. Penatibus platea nascetur ut porttitor lorem potenti at at bibendum.</p>

                    <p>Magna. Hac hac molestie habitasse per pellentesque. Primis turpis praesent accumsan nisl eros suspendisse mattis faucibus feugiat et sapien. Facilisis ante bibendum ut venenatis ipsum duis ultricies. Pede id.</p>
                    
                    <br />
                    
                    <h4 class="content-subtitle">Subtitle for another piece of content</h4>

                    <p>Sodales cursus fusce fames semper fringilla fames Est eu hendrerit tincidunt luctus fringilla volutpat. Nonummy nulla etiam pulvinar convallis. Laoreet aliquet interdum aptent vehicula sociosqu porttitor proin convallis curabitur, iaculis felis sociosqu id posuere, mollis.</p>
                    
                    <p>Dapibus tempor congue. Turpis orci condimentum. Euismod primis. Integer euismod cursus tempus mi lacus aptent morbi nulla hymenaeos.</p>
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
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </body>
  </html>
  