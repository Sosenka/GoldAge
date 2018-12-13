<?php
include("config.php");
$nlogin = $_POST['dlogin'];
$nhaslo = $_POST['dhaslo'];
$nhaslo = addslashes($nhaslo);
$nlogin = addslashes($nlogin);
$nlogin = htmlspecialchars($nlogin);
$nemail = $_POST['demail'];

if ($_GET['dlogin'] != '') { //jezeli ktos przez adres probuje kombinowac
exit;
}
if ($_GET['dhaslo'] != '') { //jezeli ktos przez adres probuje kombinowac
exit;
}
if ($_GET['demail'] != '') { //jezeli ktos przez adres probuje kombinowac
exit;
}

$nhaslo = md5($dhaslo); //szyfrowanie hasla

$istnick = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `uzytkownicy` WHERE `nick` = '$dlogin' AND `haslo` = '$dhaslo'")); // sprawdzenie czy istnieje uzytkownik o takim nicku i hasle
    if ($istnick[0] == 1) {
        echo "Użytkownik już istnieje!";
    } else {

$zapytanie_dodaj = "INSERT INTO `uzytkownicy`(`nick`, `haslo`, `email`) VALUES ('$dlogin','$dhaslo','$demail')";
$zap_dodaj=mysql_query($zapytanie_dodaj);



header("panel.php");
}
?>
