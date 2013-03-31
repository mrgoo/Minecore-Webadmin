<?php echo"<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
<html>
  <head>
  <meta http-equiv='content-type' content='text/html; charset=utf-8'>
  <meta name='generator' content='PSPad editor, www.pspad.com'>
  <title></title>
  </head>  ";?>

<?php
$one = $_POST['one'];
$two = $_POST['two'];
$three = $_POST['three'];
$four = $_POST['four'];
$five = $_POST['five'];
$six = $_POST['six'];
$seven = $_POST['seven'];
$eight = $_POST['eight'];
$nine = $_POST['nine'];
$ten = $_POST['ten'];
$eleven = $_POST['eleven'];
$twelve = $_POST['twelve'];
$thirteen = $_POST['thirteen'];
$nick = $_POST['nick'];
$vek = $_POST['vek'];
$email = $_POST['email'];
$ip=@$REMOTE_ADDR;
$date=  date("m/d/y",time()); 
include "config.php";
include "Websendtekkit.php";

if ($one == "third" && $two == "third2" && $three == "second3" && $four == "third4" && $five == "second5" && $six == "second6" && $seven
    == "first7" && $eight == "second8" && $nine == "first9" && $ten == "first10" && $eleven == "third11" )
{

mysql_connect($DBhost,$DBuser,$DBpass) or die("Unable to connect to database");
@mysql_select_db("$DBName") or die("Unable to select
 database $DBName");
{
mysql_query("INSERT INTO $table (nick, ip, vek, email, datum)
 VALUES( '$nick', '$ip','$vek','$email' , '$date')");
 }
echo "Tva zadost o pridani nicku $nick byla prijata. Pripoj se na server, by si aktivovan!";
{$ws = new Websend("$HOST");
    $ws->connect ("$Tekkit");
    $ws->doCommandAsConsole("say Ucet aktivovan hraci ".$nick."");
    $ws->doCommandAsConsole("pex user ".$nick." group add hrac");
  }   }
else
{echo "Bohužel si $nick neprošel testem. Máš v odpovědích nějakou chybu. Nevadí, zkus to znova.</br>
Pokud by ti to stále nešlo, kontaktuj helpera a on ti jistě poradí :)! </br><iframe width=700px height=500px src='http://piv.pivpiv.dk/'>";}
?>
