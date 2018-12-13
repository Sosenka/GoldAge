<?php
include("config.php");
$nick = $_SESSION['nick'];
$haslo = $_SESSION['haslo'];
    if ((empty($nick)) AND (empty($haslo))) {
echo '<br>Nie byłeś zalogowany albo zostałeś wylogowany<br><a href="index.php">Strona Główna</a><br>';
exit;
}
$user = mysql_fetch_array(mysql_query("SELECT * FROM uzytkownicy WHERE `nick`='$nick' AND `haslo`='$haslo' LIMIT 1"));
    if (empty($user[id]) OR !isset($user[id])) {
echo '<br>Nieprawidłowe logowanie.<br>';
exit;
}
?>
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

  <div class="row">

    <!-- First column -->
    <div class="col-3" style="height: 100vh; background-color: white;">

      <!-- Navigation -->
      <div class="list-group" id="list-tab" role="tablist">
        <a class="media-left waves-light text-center">
    <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-13.jpg" alt="Generic placeholder image">
  </a>
  <h4 class="media-heading text-center">Zalogowany jako: <? echo $_SESSION['nick']; ?></h4>
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Główna</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Administratorzy</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
      </div>
      <!-- Navigation -->

    </div>
    <!-- First column -->

    <!-- Second column -->
    <div class="col-9">

      <!-- Content -->
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active text-center h1-responsive" id="list-home" role="tabpanel" aria-labelledby="list-home-list" style="margin-top: 20%;">
          Witam cie w Panelu Administratora:
          <? 
          echo $_SESSION['nick'];
          ?>
          </div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
          <div class="container">
            <span class="h4-responsive">Lista administratorów</span><br />
            <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Login</th>
      <th>Email</th>
      <th>Ip</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $zapytanie="SELECT `id`, `nick`, `email`, `ip` FROM `uzytkownicy`";
    $zap=mysql_query($zapytanie);
    while($t=mysql_fetch_row($zap))
    {
    echo "<tr>";
    echo "<th scope='row'>".$t[0]."</th>";
    echo "<td>".$t[1]."</td>";
    echo "<td>".$t[2]."</td>";
    echo "<td>".$t[3]."</td>";
    echo "</tr>";
    }
    ?>
  </tbody>
</table>
<div style="margin-top: 50px;">
  <hr>
<span class="h4-responsive" style="margin-bottom: 10px;">Dodaj administratora</span><br />
<form class="form-inline" action="dodaj.php" method="post" style="margin-top: 20px;">

    <div class="md-form form-group">
        <i class="fa fa-user prefix"></i>
        <input type="text" id="form91" class="form-control validate" name="dlogin">
        <label for="form91" data-error="wrong" data-success="right">Login</label>
    </div>

    <div class="md-form form-group">
        <i class="fa fa-lock prefix"></i>
        <input type="password" id="form92" class="form-control validate" name="dhaslo">
        <label for="form92" data-error="wrong" data-success="right">Hasło</label>
    </div><br />

    <div class="md-form form-group">
        <i class="fa fa-envelope prefix"></i>
        <input type="email" id="form93" class="form-control validate" name="demail">
        <label for="form93" data-error="wrong" data-success="right">Email</label>
    </div>

    <div class="md-form form-group">
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </div>

</form>
</div>
          </div>


        </div>
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
      </div>
      <!-- Content -->

    </div>
    <!-- Second column -->

  </div>




<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>
