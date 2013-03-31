<?php
include "config.php";
$nick=$_GET['nick'];

 $login = $_GET['login'];
$id = $_GET['id']; 

if ( $login == $date && $id == $ids ){

include "Websendtekkit.php";
mysql_connect($DBhost,$DBuser,$DBpass) or die("Unable to connect to database");
@mysql_select_db("mcsms") or die("Unable to select
 database $DBName");;
mysql_query("DELETE FROM `tccheck` WHERE `tccheck`.`text` = '$nick'  LIMIT 1");

$ws = new Websend("$HOST");
    $ws->connect ("$Tekkit");
   $ws->doCommandAsConsole("say VIP vyprselo hraci ".$nick."");
   $ws->doCommandAsConsole("pex user ".$nick." delete");
    $ws->doCommandAsConsole("pex user ".$nick." group add hrac");
header( "Location: http://admin.minecore.cz/tekkit/index.php?id=$ids&login=$date&nick=$nick");

}  
else {
echo "Kontaktuj admina";}
?>
