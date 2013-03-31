<?php
include "config.php";
include "Websendsurvival.php";
$array = array("192.168.1.10", "192.168.1.100", "195.47.87.173", "195.47.87.175");
$ip=$_SERVER['REMOTE_ADDR'];
if (in_array($ip, $array)){

//$msg = array_rand($text, 2);
//$ws = new Websend("$HOST");
//$ws->connect ("$Survival");
//
//$ws->broadcast("".$prefix."&eChces suroviny? &6Dej /warp sand , /warp gravel nebo /warp clay !");
//    $ws->disconnect();

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://mc.minecore.cz:8765/console?command=bcast+Region+udelas+stickem!");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output=curl_exec($ch);

    curl_close($ch);


sleep(10);
 $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://mc.minecore.cz:8765/console?command=bcast+Survival+Games+event+na+/warp+sg!");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output=curl_exec($ch);

    curl_close($ch);
sleep(10);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://mc.minecore.cz:8765/console?command=bcast+Vitej+na+nasi+nove+mape!");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output=curl_exec($ch);

    curl_close($ch);


//    $ws->connect ("$Survival");
//$ws->broadcast("".$prefix."&6Vitej na nasi nove mape!");
//    $ws->disconnect();
sleep(10);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://mc.minecore.cz:8765/console?command=bcast+Stavet+muzes+na+/warp+build1+buid3+a+dalsich!");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output=curl_exec($ch);

    curl_close($ch);


//    $ws->connect ("$Survival");
//$ws->broadcast("".$prefix."&6Stavet muzes na /warp build1 buid3 a dalsich!");
//    $ws->disconnect();
sleep(10);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://mc.minecore.cz:8765/console?command=bcast+PvE+arena+na+/warp+pve!");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output=curl_exec($ch);

    curl_close($ch);


//    $ws->connect ("$Survival");
//$ws->broadcast("".$prefix."&6Itemy prodas na /warp shop!");
//    $ws->disconnect();
sleep(10);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://mc.minecore.cz:8765/console?command=bcast+VIP+informace+na+/warp+vip!");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output=curl_exec($ch);

    curl_close($ch);
//    $ws->connect ("$Survival");
//$ws->broadcast("".$prefix."&6Pro dnesni den mate snizene niceni veci jako kompenzaci za ranni vypadek!");
//    $ws->disconnect();
sleep(10);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://mc.minecore.cz:8765/console?command=bcast+V+pripade+problemu+nas+kontaktuj+na+skype:lipovcan.radim!");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output=curl_exec($ch);

    curl_close($ch);
 //   $ws->connect ("$Survival");
//$ws->broadcast("".$prefix."&6Stavet muzes na warpech s nazvem build!");
 //   $ws->disconnect();
    }
    else{}



?>
