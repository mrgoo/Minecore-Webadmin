<?php
include "config.php";

$login = $_GET['login'];
$id = $_GET['id'];
$ip = $_POST['ip'];
if ( $login == $date && $id == $ids ){
    include "header.php";
    echo"

  <div class='content'>
    <div class='content_resize'>
      <div class='mainbar'>
        <div class='article'> ";
    mysql_connect($HOST, $DBuser, $DBpass);
    mysql_select_db(mcusers);

    $result = mysql_query("SELECT *
FROM `authme`
WHERE `ip` LIKE '$ip'
LIMIT 0 , 30");
    echo "<h2 style='text-align:center;'>Kontrola multiaccountů</h2>" ;
    echo "<table width=100% border=1 cellpadding=3 cellspacing=0>";

    echo "<tr style=\"color: #0588C6; background:#191919;  font-weight:bold\">
<td>Nick</td>
<td>IP</td>
<td>Poslední aktivita účtu</td>
</tr>";

    while($row = mysql_fetch_assoc($result)){
        echo "<td style=color:#0588C6; background:#212121;>".$row['username']."</td>";
        echo "<td style=color:#0588C6; background:#212121;>".$row['ip']."</td>";
        echo "<td style=color:#0588C6; background:#212121;>".$row['lastlogindate']."</td>";
        echo "</tr>";}
        mysql_connect($HOST, $DBuser, $DBpass);
        mysql_select_db(mcusers);

        $result = mysql_query("SELECT *
FROM `authme`
WHERE `ip` LIKE '$ip'
LIMIT 0 , 300");

        echo "<table width=100% border=1 cellpadding=3 cellspacing=0>";

        echo "<tr style=\"color: #0588C6; background:#191919;  font-weight:bold\">
<td>Nick</td>
<td>IP</td>
<td>Poslední aktivita účtu</td>
</tr>";
        echo "<h3 style='text-align:center;'>Naposledy se tato IP přihlásila na tyto účty</h3>" ;
        while($row = mysql_fetch_assoc($result)){
            echo "<td style=color:#0588C6; background:#212121;>".$row['username']."</td>";
            echo "<td style=color:#0588C6; background:#212121;>".$row['ip']."</td>";
            echo "<td style=color:#0588C6; background:#212121;>".$row['lastlogindate']."</td>";
            echo "</tr>";

        }

        echo"</table>" ;

        include "sidebar.php";

     }else {exit;}

?>