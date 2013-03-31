<?php
$HOST = "127.0.0.1";
$DBhost = "localhost";
$DBuser = "";
$DBpass = "";
$DBName = "";
$PvP = "";
$Tekkit = "";
$Survival = "";
$password = "";
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