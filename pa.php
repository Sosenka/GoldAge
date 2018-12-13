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

<body class="panel">

<img src="img/images/logo.png" alt="logo" id="pa-logo">
<section class="form-elegant palogowanie">
    <div class="card">
        <div class="card-body mx-4">
            <div class="text-center">
                <h3 class="dark-grey-text mb-5"><strong>Logowanie PA</strong></h3>
            </div>
            <form method="post" action="logowanie.php">
            <div class="md-form">
                <input type="text" id="nick" class="form-control" name="login">
                <label for="nick">Login</label>
            </div>

            <div class="md-form pb-3">
                <input type="password" id="Form-pass1" class="form-control" name="haslo">
                <label for="Form-pass1">Hasło</label>
                <p class="font-small d-flex justify-content-end">Zapomniałeś <a href="#" class="blue-text ml-1"> Hasła?</a></p>
            </div>
            <div class="text-center mb-3">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a green">Zaloguj</button>
            </div>
          </form>
        </div>
    </div>
</section>
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
            © 2017 Copyright: Goldage.pl Powered by <a href="http://fiberart.pl">Fiberart.pl</a>
        </div>
    </div>
</footer>


  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script>
</body>

</html>
