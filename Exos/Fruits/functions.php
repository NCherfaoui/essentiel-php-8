<?php
 function display_fruits(string $filename)
 {

     $fh = fopen($filename, "r+");
     while (!feof($fh)) {
         $fruit = rtrim(fgets($fh), "\n\r");
         echo "<input type=\"checkbox\" name=\"choix[]\" value=\"$fruit\">".$fruit."<br>";
     }
    fclose($fh);
 }
 