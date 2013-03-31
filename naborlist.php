<?php
include "config.php";

$login = $_GET['login'];
$id = $_GET['id'];
$cat = $_GET['cat'];
$active= $_GET['active'];
if ( $login == $date && $id == $ids ){
    include "header.php";
    echo"
  <div class='content'>
    <div class='content_resize'>
      <div class='mainbar'>
        <div class='article'>
          <h2>Žádosti o post</h2>
          <p>";
    mysql_connect($DBhost, $DBuser, $DBpass);
    mysql_select_db(nabor);
    echo "<table width=100% border=1 cellpadding=3 cellspacing=0>";

    echo "<tr style=\"color: #0588C6; background:#ffffff;  font-weight:bold\">
<td>ID</td>
<td>Nick</td>
<td>Jméno</td>
<td>Příjmení</td>
<td>Kontakt</td>
<td>IP</td>
<td>Datum</td>
<td>Správa</td>



</tr>";
    $result = mysql_query("SELECT * FROM `nabor` WHERE `type` = $cat AND `active` = $active
ORDER BY `nabor`.`id` DESC LIMIT 0 , 10");





    while($row = mysql_fetch_assoc($result)){

        echo "<td style=color:#00618D; background:#212121;>".$row['id']."</td>";

        echo "<td style=color:#0588C6; background:#212121; >".$row['nick']."</td>";
        echo "<td style=color:#0588C6; background:#212121;>".$row['jmeno']."</td>";
        echo "<td style=color:#0588C6; background:#212121;>".$row['prijmeni']."</td>";

        echo "<td style=color:#0588C6; background:#212121;>".$row['skype']."</td>";
        echo "<td style=color:#0588C6; background:#212121;>".$row['ip']."</td>";
        echo "<td style=color:#0588C6; background:#212121;>".$row['date']."</td>";
        echo "<td style=color:#0588C6; background:#212121;><a href='nabor.php?iu=".$row['id']."&id=$id&login=$login'>Správa</a></td>";

        echo "</tr>";


    }echo"</table>"?>



<?php
    include "sidebar.php";





}else {exit;}
?>