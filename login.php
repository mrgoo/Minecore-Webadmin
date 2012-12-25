<?php
include "config.php";
$nick = $_GET["nick"];
$password = $_GET["password"]; 
$pass = SHA1($password);
$nick = strtolower ($nick);
 echo $pass;
$result = mysql_query("SELECT * 
FROM `webadmin` 
WHERE `username` = '$nick' LIMIT 0,1");
$row = mysql_fetch_assoc($result);
$login = $row['username'] ;
if ( $login == $nick ){

$result1 = mysql_query("SELECT * 
FROM `webadmin` 
WHERE `username` = '$nick'
AND `password` 
= '$pass'  LIMIT 0,1" );
$row1 = mysql_fetch_assoc($result1);
$id = $row1['id'] ;
echo $id;
if ( $id == "1"){
echo "Survival";
}
elseif ( $id == "2"){
echo "PvP";}
elseif ( $id == "3"){
echo "Tekkit";}  
else {echo "You Shall Not Pass!";exit;
}  

       }
elseif ($nick == "") {header( 'Location: http://admin.minecore.cz/index.php?u=w' ) ;}
else{
header( 'Location: http://admin.minecore.cz/index.php?u=w' ) ;

  echo"test";






}

?>
