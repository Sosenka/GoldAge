<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Goldage::Od graczy dla graczy</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/images/favicon.ico">

</head>

<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.10&appId=173495843102007";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark warning-color-dark fixed-top">
    <a class="navbar-brand Gold" href="index.php">GoldAge</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Główna <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Itemshop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Poradniki</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gracze online</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>Panel gracza
                                  </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink">
                <a class='nav-link dropdown-item' data-toggle='modal' data-target='#modal-login'>
                  Logowanie
                </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view hm-black-light">
                <img class="d-block w-100" src="img/images/mine1.jpg" alt="First slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
                <h1 class="h1-responsive">Goldage.pl</h1>
                <p>Najlepszy serwer survival + królestwa!</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-light">
                <img class="d-block w-100" src="img/images/mine2.jpg" alt="Second slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
              <h1 class="h1-responsive">Przyjazna administracja</h1>
              <p>Zawsze do twoich usług!</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-light">
                <img class="d-block w-100" src="img/images/mine3.jpg" alt="Third slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
              <h1 class="h1-responsive">Znudzony królestwami?</h1>
              <p>Zapraszamy na <strong>Skyblock</strong>!</p>
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Poprzedni</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Następny</span>
    </a>
    <!--/.Controls-->
</div>

<div class="container">
<div class="row">
  <div class="col-md-8">
    <br /><br /><br /><br />
<section class="section extra-margins pb-3 text-center text-lg-left">
    <div class="row">

        <div class="col-lg-4 mb-4">
            <div class="view overlay hm-white-slight z-depth-1-half">
                <img src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg" class="img-fluid" alt="First sample image">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <div class="col-lg-7 ml-xl-4 mb-4">
            <h4 class="mb-3"><strong>This is title of the news</strong></h4>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis aut rerum.</p>
            <p>by <a><strong>Sytho_</strong></a>, 26/08/2016</p>
            <a class="btn btn-primary btn-sm">Czytaj dalej</a>
        </div>
    </div>
    <hr class="mb-5">
    <div class="row mt-3">
        <div class="col-lg-4 mb-4">
            <div class="view overlay hm-white-slight z-depth-1-half">
                <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid" alt="Second sample image">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <div class="col-lg-7 ml-xl-4 mb-4">
            <h4 class="mb-3"><strong>This is title of the news</strong></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident et dolorum fuga.</p>
            <p>by <a><strong>Sytho_</strong></a>, 24/08/2016</p>
            <a class="btn btn-primary btn-sm">Czytaj dalej</a>
        </div>
    </div>
    <hr class="mb-5">
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="view overlay hm-white-slight z-depth-1-half">
                <img src="https://mdbootstrap.com/img/Photos/Others/img (35).jpg" class="img-fluid" alt="Third sample image">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <div class="col-lg-7 ml-xl-4 mb-4">
            <h4 class="mb-3"><strong>This is title of the news</strong></h4>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
            <p>by <a><strong>Sytho_</strong></a>, 21/08/2016</p>
            <a class="btn btn-primary btn-sm">Czytaj dalej</a>
        </div>
    </div>
</section>
</div>
<div class="col-md-1">

</div>
<div class="col-md-3">
  <br /><br /><br /><br />
  <div class="card mb-r">
    <div class="card-header deep-orange lighten-1 white-text">
        Graczy Online
    </div>
    <div class="card-body">
        <p class="card-text" style="text-align: center;">
          <?
            function PlayerCount($host = "p9.titanaxe.com", $port = 33510)
              {
                if (@$_SESSION["con"]["time"] > time()) return $_SESSION["con"]["data"];
                $h = @fsockopen($host, $port, $errno, $errstr, 3);
                if (!$h) return "Error $errno ($errstr)";
                fwrite($h, "\xFE");
                list($motd, $p, $mp) = explode("\xA7", mb_convert_encoding(substr(fread($h, 1024), 3), 'auto', 'UCS-2'));
                $_SESSION["con"] = array("time" => (time() + 30), "data" => "$p");
                return $_SESSION["con"]["data"];
              }
                echo "<strong>".PlayerCount('p9.titanaxe.com', 33510)."/45</strong>";
                echo "<div class='progress'>xd
                          <div class='progress-bar' role='progressbar' style='width: ".PlayerCount('p9.titanaxe.com', 33510)."px;' aria-valuenow='".PlayerCount('p9.titanaxe.com', 33510)."' aria-valuemin='0' aria-valuemax='45'>xd2</div>
                              </div>";
                         ?>
          </p>
        <a class="btn btn-deep-orange">Zobacz liste graczy</a>
    </div>
</div>
<div class="card mt-20">
  <div class="card-header deep-orange lighten-1 white-text">
      Facebook
  </div>
  <div class="card-body">
    <div class="fb-page" data-href="https://www.facebook.com/GoldAgePL/?ref=br_rs" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/GoldAgePL/?ref=br_rs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GoldAgePL/?ref=br_rs">GoldAge.pl - Serwer z przyszłością</a></blockquote></div>
  </div>
</div>
</div>
</div>
</div>
<!--- FOOTER-->

<footer class="page-footer indigo center-on-small-only pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-socials mb-5 flex-center">
                    <a class="icons-sm fb-ic"><i class="fa fa-facebook fa-lg white-text mr-md-4"> </i></a>
                    <a class="icons-sm tw-ic"><i class="fa fa-twitter fa-lg white-text mr-md-4"> </i></a>
                    <a class="icons-sm gplus-ic"><i class="fa fa-google-plus fa-lg white-text mr-md-4"> </i></a>
                    <a class="icons-sm li-ic"><i class="fa fa-linkedin fa-lg white-text mr-md-4"> </i></a>
                    <a class="icons-sm ins-ic"><i class="fa fa-instagram fa-lg white-text mr-md-4"> </i></a>
                    <a class="icons-sm pin-ic"><i class="fa fa-pinterest fa-lg white-text"> </i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container-fluid">
            <a href="pa.php">©</a> 2017 Copyright: Goldage.pl Powered by <a href="http://fiberart.pl">Fiberart.pl</a>
        </div>
    </div>
</footer>


  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script>
  <div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header text-center light-blue">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <h3 class="w-100 text-center"><i class="fa fa-user text-center"></i> Logowanie</h3>
          </div>
          <!--Body-->
          <div class="modal-body">
            <form method="POST" action="methods/login.php">
              <div class="md-form">
                  <i class="fa fa-user prefix"></i>
                  <input type="text" id="form2" name="login" class="form-control">
                  <label for="form2">Login</label>
              </div>

              <div class="md-form">
                  <i class="fa fa-lock prefix"></i>
                  <input type="password" id="form3" name="haslo" class="form-control">
                  <label for="form3">Hasło</label>
              </div>
              <div class="text-center">
                  <input type="submit" class="btn btn-primary btn-lg" value="Zaloguj" />
              </div>
            </form>
          </div>
          <!--Footer-->
          <div class="modal-footer">
              <div class="options text-left">
                  <p>Zapomniałeś <a href="#">Hasła?</a></p>
              </div>
              <button type="button" class="btn btn-default ml-auto" data-dismiss="modal">Zamknij</button>
          </div>
      </div>
      <!--/.Content-->
  </div>
</div>
</body>

</html>
