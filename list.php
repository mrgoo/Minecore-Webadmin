<?php $dir = "/home/survival/plugins/WorldEdit/schematics";
if ($handle = opendir($dir)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo $entry."</br>";
        }
    }
    closedir($handle);
}
echo "test";
?>