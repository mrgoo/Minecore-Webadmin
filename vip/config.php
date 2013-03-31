<?php
  $HOST = "192.168.1.100"; 
$DBhost = "localhost";
$DBuser = "";
$DBpass = "";
$DBName = "";
$Survival = "";
$datea=  date("",time());
$dateb = date("",time());
$dated = date("",time());
$datec = $datea-$dateb;
$date = SHA1($datec);
$ids = SHA1($dated);
$cas1=  date("i",time());
$cas2= "60";
$cas = $cas2-$cas1;
$PvP = "";
?>
