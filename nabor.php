<?php
include "config.php";

$login = $_GET['login'];
$id = $_GET['id'];
$iu= $_GET['iu'];
if ($iu == ""){

    $iu= $_POST['iu'];}
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

    $result = mysql_query("SELECT *
FROM `nabor`
WHERE `id` = $iu
LIMIT 0 , 30");




    while($row = mysql_fetch_assoc($result)){
        echo "<div class='single'>";
        echo "ID:".$row['id']." &nbsp&nbsp&nbsp    IP:".$row['ip']."<div class='date'> Nick:&nbsp;&nbsp;&nbsp;&nbsp;".$row['nick']." &nbsp;Datum:<div class='dater'>&nbsp".$row['date']."</div> </div>";
        echo "<div class='jmeno'>Jméno:<div class='jdetail'>".$row['jmeno']."";
        echo "&nbsp".$row['prijmeni']."</div></div>";
        echo " <div class='email'>Email:<div class='edetail'>".$row['email']."</div></div>";
        echo " <div class='email'>Skype:<div class='edetail'>".$row['skype']."</div></div>";
        echo "<div class='vek'>Věk:<div class='vdetail'>".$row['vek']."</div></div>
    <div class='long'>Jak dlouho hraje:<div class='ldetail'>".$row['long']."</div></div>
    <div class='why'>Proč se chce stát helperem:</br><div class='wdetail'>".$row['why']."</div></div>
    <div class='change'>Co by chtěl změnit:</br> <div class='cdetail'>".$row['change']." </div></div>
<div class='solution'><a href='naborscript.php?iu=".$row['id']."&id=$id&login=$login&action=1'>Schválit</a> <a href='naborscript.php?iu=".$row['id']."&id=$id&login=$login&action=2'>Zamítnout
</a><a href='naborscript.php?iu=".$row['id']."&id=$id&login=$login&action=3'>Požádat o doplnění přihlášky</a> <a href='naborscript.php?iu=".$row['id']."&id=$id&login=$login&action=4'>Smazat</a></div>


</div>";

    }?>



<?php
    include "sidebar.php";





}else {exit;}
?>