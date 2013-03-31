<?php
include "config.php";

$login = $_GET['login'];
$id = $_GET['id'];

if ( $login == $date && $id == $ids ){
include "header.php";
echo"
  <div class='content'>
    <div class='content_resize'>
      <div class='mainbar'>
        <div class='article'>
          <h2>Nejnovější VIP</h2>
          <p>";
          mysql_connect($DBhost, $DBuser, $DBpass);
mysql_select_db(mcsms);

$result = mysql_query("SELECT * FROM mccheck WHERE `date` LIKE '%/13'
ORDER BY `mccheck`.`date` DESC LIMIT 0 , 10");

echo "<table width=100% border=1   cellpadding=3 cellspacing=0>";

echo "<tr style=\"color: #0588C6; background:#ffffff;  font-weight:bold\"> 
<td>Datum</td>
<td>Nick</td>
<td>Hash</td>
<td>Operátor</td>
<td>Služba</td>
</tr>";

while($row = mysql_fetch_assoc($result)){
	
echo "<td style=color:#00618D; background:#212121;>".$row['date']."</td>";
echo "<td style=color:#0588C6; background:#212121; >".$row['text']."</td>";
echo "<td style=color:#C0C0C0; background:#212121;>".$row['hash']."</td>";
echo "<td style=color:#C0C0C0; background:#212121;>".$row['operator']."</td>";
$text = $row['text'];   
if (strpos($text,' kit ') !== false) {echo "<td style=color:#FBFF00; background:#212121;>Itemy</td>";}
else{
if ($row['price'] == 10)
{echo "<td style=color:#5EFF00; background:#212121;>Aktivace tekkit</td>";}
else {
if ($row['price'] == 20)
{echo "<td style=color:#00BBFF; background:#212121;>Peníze</td>";}
else{
if ($row['price'] == 30)
{echo "<td style=color:#FF0000; background:#212121;>Unban na nick</td>";}
else {
if ($row['price'] == 50)
{echo "<td style=color:#00BBFF; background:#212121;>Vip 1 měsíc</td>";}
else {
if ($row['price'] == 79)
{$text = $row['text'];   
if (strpos($text,' soutez ') !== false) {
echo "<td style=color:#FF0000; background:#212121;>Unban na IP</td>";}
else{echo "<td style=color:#00FF2E; background:#212121;>VIP</td>";}}
else  {
if ($row['price'] == 99)
{echo "<td style=color:#00698B; background:#212121;>VIP na 2 měsíce</td>";}
else {echo "<td style=color:#FF8B8B; background:#212121;>NEDEFINOVANA CENA</td>";}}}}}}}
echo "</tr>";
}
echo "</table>";
          
          
          
          
          
          
          
          echo"<h2>Postup odebrání
VIP</h2><h3><a href='/ToBeExecuted/list.php'>Nahraj screenshot a poté odeber VIP - klepnutím zobrazíte seznam screenshotů</a></h3><form
 action='upload.php' method='post'
 enctype='multipart/form-data'>
 <label for='file'></label>
 <input type='file' name='file' id='file'><br>
 <input type='submit' name='submit' value='Upload'>
 </form>
 <h2>Upload schematicu</h2><form
 action='upload.php' method='post'
 enctype='multipart/form-data'>
 <label for='file'></label>
 <input type='file' name='file' id='file'><br>
 <input type='hidden' name='schem' value='1'>
 <input type='submit' name='submit' value='Upload'>
 </form></p>
          <div class='clr'></div>
        </div>
        <div class='article'>
          <h2>Seznam aktuálních banů</h2>
          <p>"; 
          mysql_connect($server, $dbuser, $dbpass);
mysql_select_db(mcbans);

$result = mysql_query("SELECT * 
FROM `banlist` 
WHERE `type` NOT 
IN ( 2, 3 ) 
ORDER BY `banlist`.`id` DESC 
LIMIT 0 , 30");
//This will display the most recent by id edit this query how you see fit. Limit, Order, ect.
echo "<table width=100% border=1 cellpadding=3 cellspacing=0>";

echo "<tr style=\"color: #0588C6; background:#ffffff;  font-weight:bold\"> 
<td>Typ</td>
<td>Nick</td>
<td>Důvod</td>
<td>Udělil</td>
<td>Kdy</td>
<td>Jak dlouho</td>
<td>Id banu</td>



</tr>";

while($row = mysql_fetch_assoc($result)){
switch ($row['type'])
	{
	case 0:
		$type = "Ban";
		break;
	case 1:
		$type = "IP Ban";
		break;
	case 2:
		$type = "Varování";
		break;
	case 3:
		$type = "Kick";
		break;
	case 4:
		$type = "Zapálen";
		break;
	case 5:
		$type = "Unban";
		break;
	case 6:
		$type = "Jail";
		break;
	case 9:
		$type = "Permanent Ban";
		break;
	default:
		$type = "Jiný";
	}
	
	echo "<td style=color:#00618D; background:#212121;>$type</td>";

echo "<td style=color:#0588C6; background:#212121; >".$row['name']."</td>";
echo "<td style=color:#0588C6; background:#212121;>".$row['reason']."</td>";
echo "<td style=color:#0588C6; background:#212121;>".$row['admin']."</td>";
//Convert Epoch Time to Standard format
$datetime = date("F j, Y, g:i a", $row['time']);
echo "<td style=color:#0588C6; background:#212121;>$datetime</td >";
$dateconvert = date("F j, Y, g:i a", $row['temptime']);  
if($row['temptime'] == "0"){
echo "<td style=color:#0588C6; background:#212121;>Permanent</td>";
}else{
echo "<td style=color:#0588C6; background:#212121;>$dateconvert</td>";
}
echo "<td style=color:#0588C6; background:#212121;>".$row['id']."</td>";

echo "</tr>";
}

echo"</table>";
          
          
          
       include "sidebar.php";


 }else {exit;}