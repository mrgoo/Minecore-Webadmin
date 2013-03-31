<?php
include "config.php";
$nick = $_GET["nick"];
$password = $_GET["password"]; 
$pass = SHA1($password);
$nick = strtolower ($nick);
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

if ( $id == "1"){
header( 'Location: http://admin.minecore.cz/admin.php?login='.$date.'&id='.$ids);
}
elseif ( $id == "2"){
header( 'Location: http://admin.minecore.cz/admin.php?login='.$date.'&id='.$ida);}
elseif ( $id == "3"){
header( 'Location: http://admin.minecore.cz/admin.php?login='.$date.'&id='.$ida);}  
else {echo "You Shall Not Pass!";exit;
}  

       }
elseif ($nick == "") {header( 'Location: http://admin.minecore.cz/index.php?u=w' ) ;}
else{
header( 'Location: http://admin.minecore.cz/index.php?u=w' ) ;








}

?>
