<?php
$type = $_POST["schem"];
if ($type === "1"){
    $allowedExts = array("schem", "schematic");
    $dir = "/home/survival/plugins/WorldEdit/schematics/";
    $extension = end(explode(".", $_FILES["file"]["name"]));
    if (
        in_array($extension, $allowedExts))
    {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            echo "Type: " . $_FILES["file"]["type"] . "<br>";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

            if (file_exists($dir . $_FILES["file"]["name"]))
            {
                echo $_FILES["file"]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                    $dir . $_FILES["file"]["name"]);
                echo "Stored in: " . $dir . $_FILES["file"]["name"];
            }
        }
    }
    else
    {
        echo "Invalid file";
    }







}else{

 $allowedExts = array("jpg", "jpeg", "gif", "png");
 $extension = end(explode(".", $_FILES["file"]["name"]));
 if ((($_FILES["file"]["type"] == "image/gif")
 || ($_FILES["file"]["type"] == "image/jpeg")
 || ($_FILES["file"]["type"] == "image/png")
 || ($_FILES["file"]["type"] == "image/pjpeg"))
 && in_array($extension, $allowedExts))
   {
   if ($_FILES["file"]["error"] > 0)
     {
     echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
     }
   else
     {
     echo "Upload: " . $_FILES["file"]["name"] . "<br>";
     echo "Type: " . $_FILES["file"]["type"] . "<br>";
     echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
     echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

     if (file_exists("ToBeExecuted/" . $_FILES["file"]["name"]))
       {
       echo $_FILES["file"]["name"] . " already exists. ";
       }
     else
       {
       move_uploaded_file($_FILES["file"]["tmp_name"],
       "ToBeExecuted/" . $_FILES["file"]["name"]);
       echo "Stored in: " . "ToBeExecuted/" . $_FILES["file"]["name"];
       }
     }
   }
 else
   {
   echo "Invalid file";
   }
}
?>
