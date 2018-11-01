
<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Home &mdash; Organisation Title</title>
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
            <div class="corner"></div><!--Covers up any gaps above the slanted header area-->
            
            <section class="address z-1" role="complementary" style="background: cyan;">
                <p class="address-p"><?/*php perch_content('Address');*/ ?>
                    Church Path,<br />
                    Glamis Street,<br />
                    Bognor Regis PO21 1DB<br />
                    TEL:  01243 864124<br />
                    <span style="font-size: 1.3rem;">Registered Charity No. #########</span>
                </p>
            </section>
            
            <header role="banner"><!--Start of header area containing website title, graphics and navigation etc-->
                <img class="left logo" src="img/logo.png" />

                <h1 style="background: pink;" class="header-title textbig7 smallcaps"><em>39 Youth Club</em></h1>

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


    <main class="container clear" role="main" style="background: blue; color: white;"><!--Container for ALL content, everything inside this-->
      <p>Container begins</p>

      <div class="">
        <article role="article" style="background: orange;">
          <h1 role="heading">Header for article (page content)</h1>

          <section style="background: yellow; color: black;">
            <h2>Header for section within article</h2>

            <p>Zarathustra value salvation pious self oneself society strong pious depths good. Abstract inexpedient suicide ocean pinnacle selfish merciful grandeur. Of ascetic revaluation philosophy faith marvelous strong christian zarathustra.</p>

            <p>Convictions selfish disgust pinnacle strong. Passion grandeur hatred endless abstract moral spirit god justice merciful revaluation faithful.</p>

            <p>Intentions burying enlightenment war suicide. Evil morality holiest morality war moral free marvelous mountains chaos. Ultimate transvaluation merciful passion victorious pious justice. Hope faith inexpedient mountains god hope madness. War disgust pinnacle right right overcome morality law sexuality ultimate noble passion marvelous. Grandeur reason endless grandeur decieve intentions reason. Passion right faith will horror free against overcome moral chaos pious free.</p>

            <p>Contradict dead self salvation hatred deceptions grandeur hatred. Insofar abstract abstract fearful god suicide virtues against enlightenment love will. Hope transvaluation madness spirit deceptions faithful. Snare madness ascetic faith spirit gains mountains selfish against pious play morality ocean. Chaos enlightenment will depths free. Enlightenment.</p>
              
            <ul role="list">
              <li role="listitem">Hey there. <code>This is a code snippet</code>
                <ul role="list">
                  <li role="listitem">Hey I'm embedded</li>
                </ul>
              </li>
            </ul>
              
            <ol role="list">
              <li role="listitem">Hey there. <code>This is a code snippet</code>
                <ol role="list">
                  <li role="listitem">Hey I'm embedded</li>
                </ol>
              </li>
            </ol>

            <h3>Header 3</h3>

            <h4>Header 4</h4>

            <h5>Header 5</h5>

            <h6>Header 6</h6>

            <table summary="">
                <thead style="background: brown;">
                    <th scope="col" style="background: orange;">I'm the first column header in the table</th>
                    <th scope="col" style="background: green;">I'm the second column header</th>
                    <th scope="col" style="background: purple;">I'm the third column header</th>
                </thead>
                <tbody>
                    <tr style="background: red;">
                        <td style="background: orange;">I'm the first column cell gosh I have a lot of text</td>
                        <td style="background: green;">I'm the second column cell</td>
                        <td style="background: purple;">Moo</td>
                    </tr>
                    <tr style="background: brown;">
                        <td style="background: pink;">I'm in the second row in the first column</td>
                    </tr>
                </tbody>
            </table>

            <figure class="width-50">
              <img
                alt="Photo of a bunny"
                class="fluid-100"
                role="img"
                src="https://s-media-cache-ak0.pinimg.com/736x/0a/8b/91/0a8b91f0bfbbcbc65fb7d43cd9ff4c78.jpg"
                title="Bunny Rabbit by Photographer"
              >
              <figcaption>Hey this is a caption for the above image</figcaption>
            </figure>
          </section>

          <div class="four columns" style="background: green">
            <p>Four columns</p>
          </div>

          <div class="three columns" style="background: green">
            <p>Three columns</p>
          </div>

          <div class="four columns u-pull-right">
            <section style="background: purple;">
              <p>This area doesn't want to be part of the main article area! Behold u-pull-right.</p>
            </section>
          </div>
            
            <figure class="clear fluid-images-3 margin-4" style="background: magenta;">
                <a href="">
                    <img
                    alt="Photo of a bunny"
                    class=""
                    role="img"
                    src="https://s-media-cache-ak0.pinimg.com/736x/0a/8b/91/0a8b91f0bfbbcbc65fb7d43cd9ff4c78.jpg"
                    title="Bunny Rabbit by Photographer"
                    >
                </a>
                <a href="">
                    <img
                    alt="Photo of a bunny"
                    class=""
                    role="img"
                    src="https://s-media-cache-ak0.pinimg.com/736x/0a/8b/91/0a8b91f0bfbbcbc65fb7d43cd9ff4c78.jpg"
                    title="Bunny Rabbit by Photographer"
                    >
                </a>
                <a href="">
                    <img
                    alt="Photo of a bunny"
                    class=""
                    role="img"
                    src="https://s-media-cache-ak0.pinimg.com/736x/0a/8b/91/0a8b91f0bfbbcbc65fb7d43cd9ff4c78.jpg"
                    title="Bunny Rabbit by Photographer"
                    >
                </a>
              
              <figcaption class="clear centre padding-3-left padding-3-right">Hey this is a caption for the above images plural. To add another image, just change it to fluid-xx depending on how many images (divided up into 100 or whatever width the figure container is). Obviously adjustments need to be made if padding and margins are needed. The above also have links! Weirdly this messes with the layout a bit and requires further tweaking beyond just when you have plain images.</figcaption>
        </article>
      </div>

      <p class="clear">End of container</p>
    </main>

  
  </div><!--END OF CONTAINER-->
  
      <footer style="background: orange;">
          <ul style="background: green;">
            <li style="background: yellow;"><a href="">Home</a></li>
            <li style="background: yellow;"><a href="events/">Events</a></li>
            <li style="background: yellow;"><a href="diary/">Diary</a></li>
            <li style="background: yellow;"><a href="news/">News</a></li>
            <li style="background: yellow;"><a href="videos/">Videos</a></li>
            <li style="background: yellow;"><a href="admin/">Admin</a></li>
            <li style="background: yellow;"><a href="findus/">Find Us</a></li>
          </ul>
  
          <br />
  
          <div role="contentinfo"><!--Copyright info etc-->
              <p><strong>&copy; <?php echo date('Y'); ?> Arun Sunshine Group | Designed by <a href="http://www.paulcomputerhelp.co.uk/">Paul Robinson</a></strong><br />
  
              <br />
              <br />
  
              <a href="perch/">Perch Login</a></p>
          </div>
  
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
  
