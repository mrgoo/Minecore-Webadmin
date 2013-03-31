<?php
include "config.php";

$login = $_GET['login'];
$id = $_GET['id'];
$iu= $_GET['iu'];
$action= $_GET['action'];
$check = "neverever";
echo "test";
if ( $login == $date && $id == $ids ){


    $result1 = mysql_query("SELECT *
FROM `nabor`
WHERE `id` = $iu");
    while($row = mysql_fetch_assoc($result1)){
        $email = $row['email'];
        $nick = $row['nick'];
        $dates = $row['date'];
    }

   if ($action == 1){

       $result = mysql_query("UPDATE `mcusers`.`nabor` SET `active` = '0',
`status` = '1', `reply` = '1' WHERE `nabor`.`id` = $iu;");


       $subject = 'Žádost byla přijata!';
       $message = 'Zdravím '.$nick.'! Tvá žádost z '.$dates.' byla přijata! Kontaktuj nás na Skype: lipovcan.radim . Napiš poté tvůj nick a na jakou pozici sis podal žádost, navíc pošli tvoje ID: '.$iu.'. Zatím se měj!';
       header("Location: http://www.minecore.cz/email.php?check=$check&subject=$subject&nick=$nick&message=$message&email=$email ");

   }
    elseif($action == 2){
        $subject = 'Žádost byla zamítnuta!';
        $message = 'Zdravím '.$nick.'!  Tvá žádost z '.$dates.' byla bohužel zamítnuta! Důvodem jsou nedostatečné předpoklady pro fungování v admin teamu nebo špatně vyplněná přihláška. S pozdravem Minecore.cz';
        header("Location: http://www.minecore.cz/email.php?check=$check&subject=$subject&nick=$nick&message=$message&email=$email ");

        $result = mysql_query("UPDATE `mcusers`.`nabor` SET `active` = '0',
`status` = '2', `reply` = '1' WHERE `nabor`.`id` = $iu;");


    }
   elseif($action == 3){
       $subject = 'Žádosti něco chybí!';
       $message = 'Zdravím '.$nick.'!  Tvá žádost z '.$dates.' byla probrána a vyhodnocena jako nekompletní! Doplňíš ji tak, že podáš další žádost. Tentokrát ale prosím se více rozepiš. Nemáme křišťálové koule abychom věštili, co v tobě je! S pozdravem Minecore.cz';
       header("Location: http://www.minecore.cz/email.php?check=$check&subject=$subject&nick=$nick&message=$message&email=$email ");

        $result = mysql_query("UPDATE `mcusers`.`nabor` SET `active` = '0',
`status` = '3', `reply` = '1' WHERE `nabor`.`id` = $iu;");

   }
    elseif($action == 4){
        $subject = 'Žádosti byla označena jako spam!';
        $message = 'Zdravím '.$nick.'!  Tvá žádost z '.$dates.' byla označena jako spam z důvodu neplatného podání přihlášky! Zkus to znova nebo si z nás raději nedělej srandu :). S pozdravem Minecore.cz';
        header("Location: http://www.minecore.cz/email.php?check=$check&subject=$subject&nick=$nick&message=$message&email=$email ");
        $result = mysql_query("DELETE FROM `mcusers`.`nabor` WHERE `nabor`.`id` = $iu");


    }
    else {echo "Kontaktuj admina.";}
    }







else {exit;}
?>