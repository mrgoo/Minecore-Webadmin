<?php
$HOST = ""; 
$DBhost = "";
$DBuser = "";
$DBpass = "";
$DBName = "";
$PvP = "";
$Tekkit = "";
$Survival = "";
$password = "";
mysql_connect($DBhost,$DBuser,$DBpass) or die("Unable to connect to database");
@mysql_select_db("$DBName") or die("Unable to select
 database $DBName");
mysql_query("set names utf8;");
$datea=  date("",time());
$dateb = date("",time());
$dated = date("",time());
$datec = $datea-$dateb;
$date = SHA1($datec);
$ids = SHA1($dated);
$cas1=  date("i",time());
$cas2= "60";
$cas = $cas2-$cas1;

?>
