<?php
include "config.php";
$login = $_GET['login'];
$id = $_GET['id'];
$nick = $_GET['nick'];
if ( $login == $date && $id == $ids ){
//$ip=$_SERVER['REMOTE_ADDR'];
//$array = array("192.168.1.10","94.113.215.96", "192.168.1.100", "195.47.87.173", "195.47.87.175");
//if (in_array($ip, $array)){
    mysql_connect($DBhost,$DBuser,$DBpass) or die("Unable to connect to database");
    @mysql_select_db("$DBName") or die("Unable to select
 database $DBName");





    include "../header.php";
echo"
  <div class='content'>
      <div class='content_resize'>
          <div class='mainbar'>
              <div class='article'>";
                echo "<table id='onet'><tr id='top'>
<td>Datum</td>
<td>Cena</td>
<td>Nick</td>
<td>Odstranit</td>

</tr>";

    $result1 = mysql_query("SELECT *
FROM `mccheck`
WHERE `date` LIKE '%/12'
ORDER BY `mccheck`.`date` ASC
LIMIT 0 , 3000000");

    while($row1 = mysql_fetch_assoc($result1)){
        if ($row1['price'] == "99"){$row1['price']= "<div class='red'>".$row1['price']."</div>";} elseif($row1['price'] == "50" || $row1['price'] == "2"){$row1['price']= "<div class='green'>".$row1['price']."</div>";}elseif($row1['price'] == "79" || $row1['price'] == "30"){$row1['price']= "<div class='gray'>".$row1['price']."</div>";} else{}


        echo "<td class='single'>".$row1['date']."</td>";
        echo "<td class='single'>".$row1['price']."</td>";
        echo "<td class='single'>".$row1['text']."</td>";


        echo "<td class='single'><a href='delete.php?nick=".$row1['text']."&id=$ids&login=$date'>Odstranit</a>                 ";
        echo "</td>";
        echo "</tr>";
//echo "<td style=color:#C0C0C0; background:#212121;><a href='edit.php?id=".$row['stav']."'>Upravit</a><a href='delete.php?id=".$row['id']."'>Smazat</a></td>";
        echo "</tr>";
    }              $result2 = mysql_query("SELECT *
FROM `mccheck`
WHERE `date` LIKE '%/13'
ORDER BY `mccheck`.`date` ASC
LIMIT 0 , 30000");
    while($row2 = mysql_fetch_assoc($result2)){

        if ($row2['price'] == "99"){$row2['price']= "<div class='red'>".$row2['price']."</div>";} elseif($row2['price'] == "50" || $row2['price'] == "2"){$row2['price']= "<div class='green'>".$row2['price']."</div>";}elseif($row2['price'] == "79" || $row2['price'] == "30"){$row2['price']= "<div class='gray'>".$row2['price']."</div>";} else{}

        echo "<td class='single'>".$row2['date']."</td>";
        echo "<td class='single'>".$row2['price']."</td>";
        echo "<td class='single'>".$row2['text']."</td>";


        echo "<td class='single'><a href='delete.php?nick=".$row2['text']."&id=$ids&login=$date'>Odstranit</a>                 ";
        echo "</td>";
        echo "</tr>";
//echo "<td style=color:#C0C0C0; background:#212121;><a href='edit.php?id=".$row['stav']."'>Upravit</a><a href='delete.php?id=".$row['id']."'>Smazat</a></td>";
        echo "</tr>";}echo"</table>";



                  include "../sidebar.php";


                  }else {exit;}