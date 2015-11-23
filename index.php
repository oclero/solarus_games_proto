<!DOCTYPE html>

<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="An open-source ARPG game engine">
  <meta name="author" content="Solarus Games">
  <link rel="icon" href="assets/img/favicon.ico">
  <title>Solarus Games</title>
  <link href="assets/css/bootstrap/bootstrap.min.css" rel='stylesheet' type='text/css'>
  <!-- <link href="assets/css/bootstrap/bootstrap-theme.min.css"> -->
  <link href="assets/css/font-awesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic" rel='stylesheet' type='text/css'>
  <link href="assets/css/styles.css" rel='stylesheet' type='text/css'>
</head>
<body>

  <!-- Header -->
  <header class="site-header" role="banner">

    <!-- Navbar -->
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

          <!-- Navbar Header -->
          <div class="navbar-header">

            <!-- Logo -->
            <a class="navbar-brand" href="#">
              <img class="navbar-logo" src="assets/img/solarus-logo-white-on-transparent.png" alt="Solarus"></img>
            </a>

            <!-- Button to toggle menu -->
            <button type="button" class="navbar-toggle" data-toggle="collapse"  data-target=".navbar-collapse">
              <span class="sr-only">Toogle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>

          <!-- Navbar Menu -->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">

              <!-- Left side -->
              <li>
                <a href="#">Engine</a>
                <div class="navbar-link-underline"></div>
              </li>

              <li class="active">
                <a href="#">Games</a>
                <div class="navbar-link-underline"></div>
              </li>

              <li>
                <a href="#">Development</a>
                <div class="navbar-link-underline"></div>
              </li>

            </ul>

            <!-- Right side -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="navbar-link-right" data-icon="blog" href="#">Blog</a>
                <div class="navbar-link-underline"></div>
              </li>

              <li class="active">
                <a class="navbar-link-right" data-icon="forum" href="#">Forum</a>
                <div class="navbar-link-underline"></div>
              </li>

              <li>
                <a class="navbar-link-right" data-icon="search" href="#">Search</a>
                <div class="navbar-link-underline"></div>
              </li>

            </ul>
          </div>

        </div>
      </div>
    </div>

  </header>

  <!-- Hero -->
  <section id="hero">
    <div class="container clearfix">
      <div class="row">

        <!-- Left column -->
        <div class="col-sm-7">
          <div class="hero-img-box">
            <!-- Image to illustrate -->
            <img src="assets/img/hero_link.png">
          </div>
        </div>

        <!-- Right column -->
        <div class="col-sm-5">

          <div class="hero-right-column">

            <img class="hero-logo" src="assets/img/solarus-logo-white-on-transparent.png" alt="Solarus"></img>

            <p class="lead">
              <b>Solarus is a free and open-source 2D Action-RPG game engine</b>, licensed under GPL, and written in C++. It runs quests in Lua, and can work on a great number of platforms.
            </br>
            Solarus also features a game editor called <b>Solarus Quest Editor</b>, written in C++ with Qt to help you creating your game.
          </p>

          <div class="hero-learnmore">
            <a role="button" href="#">Learn more ▶</a>
          </div>

          <a class="btn btn-primary hero-button" role="button" href="#">
            <div class="hero-button-icon"></div>
            <div class="hero-button-text">
              <div class="hero-button-title">Download</div>
              <div class="hero-button-caption">Version 1.5.1 for Windows</div>
            </div>
          </a>

          <div class="hero-other">
            <a role="button" href="#">Other platforms</a>•<a role="button" href="#">All versions</a>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<!-- Section: games -->
<section id="games">
  <div class="container clearfix">
    <div class="row sol-row-games">

      <!-- Left column: title -->
      <div class="col-sm-3 games-title-box">
        <a href="#" role="button" class="games-link"><h1>Games made with Solarus</h1></a>
      </div>

      <!-- Right column: content -->
      <div class="col-sm-9 games-content-box">

        <div class="row">
          <div class="col-sm-4 games-game-box">
            <img class="games-game-boxart" src="assets/img/roth_box_front.png">
          </div>
          <div class="col-sm-4 games-game-box">
            <img class="games-game-boxart" src="assets/img/roth_box_front.png">
          </div>
          <div class="col-sm-4 games-game-box">
            <img class="games-game-boxart" src="assets/img/roth_box_front.png">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 games-game-box">
            <img class="games-game-boxart" src="assets/img/roth_box_front.png">
          </div>
          <div class="col-sm-4 games-game-box">
            <img class="games-game-boxart" src="assets/img/roth_box_front.png">
          </div>
          <div class="col-sm-4 games-game-box">
            <a href="#" role="button" class="btn games-learn">
              <div>
                <img src="assets/img/learn_icon.png">
              </div>
              <div>
                <h4>Learn</h4>
                <p>Develop your own game with our tutorials, videos and more.</p>
              </div>
            </a>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- Section: news -->
<section id="news">
  <div class="alternate-background">
    <div class="container clearfix">
      <div class="row">

        <!-- Left column: title -->
        <div class="col-sm-3 news-title-box">
          <a href="#" role="button" class="news-link"><h1>Latest news</h1></a>
        </div>

        <!-- Right column: content -->
        <div class="col-sm-9">
          <div class="col-sm-9">
            <div class="row news-box">
              <div class="col-sm-6">
                <h2>Blog</h2>
              </div>
              <div class="col-sm-6">
                <h2>Twitter</h2>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- footer -->
<footer class="site-footer">
  <div class="footer-background">
  <div class="container clearfix">
    <div class="row">
      <div class="col-sm-3">
        <h4>Legal Information</h4>
          <p>© 2011-2015 Christopho, Solarus
            Solarus and Solarus Quest Editor are under GPL v3,
            and are independent from Nintendo.
          </p>
          <p>
            Assets from <em>The Legend Of Zelda™ : A Link To The Past™</em>
            are properties of Nintendo.
            Do not use them for commercial software.
          </p>
      </div>

      <div class="col-sm-3">
        <h4>Donate</h4>
        <p>Solarus is free, but if you want to help us,
          you can donate via PayPal, BitCoin or Flattr.
          Your support is very appreciated.</p>
      </div>

      <div class="col-sm-3">
        <h4>About</h4>
        <p>Solarus is made by a team of people on their free time,
          your contributions are welcome.</p>
      </div>

      <div class="col-sm-3">
        <h4>Links</h4>
        <p>Social networks</p>
      </div>

    </div>
  </div>
  </div>

</footer>

<!-- scripts -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
