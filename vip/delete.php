<?php
include "config.php";
$nick=$_GET['nick'];

 $login = $_GET['login'];
$id = $_GET['id']; 

if ( $login == $date && $id == $ids ){


mysql_connect($DBhost,$DBuser,$DBpass) or die("Unable to connect to database");
@mysql_select_db("mcsms") or die("Unable to select
 database $DBName");;
mysql_query("DELETE FROM `mccheck` WHERE `mccheck`.`text` = '$nick'  LIMIT 1");
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://mc.minecore.cz:8765/console?command=pex+user+$nick+delete");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output=curl_exec($ch);

    curl_close($ch);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://mc.minecore.cz:8765/console?command=a+Odebrano+VIP:+$nick+");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output=curl_exec($ch);

    curl_close($ch);

header( "Location: http://admin.minecore.cz/vip/index.php?id=$ids&login=$date&nick=$nick");

}  
else {
echo "Kontaktuj admina";}
?>
