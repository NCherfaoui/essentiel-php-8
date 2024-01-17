<?php
 function display_fruits(string $filename)
 {
     // Open the file for reading and writing
     $fh = fopen($filename, "r+");
 
     // Read the fruits from the file and display them as checkboxes
     while (!feof($fh)) {
         $fruit = rtrim(fgets($fh), "\n\r");
         echo "<input type=\"checkbox\" name=\"choix[]\" value=\"$fruit\">".$fruit."<br>";
     }
    fclose($fh);
 }
 