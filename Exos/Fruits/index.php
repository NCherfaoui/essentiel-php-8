<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1> Choisissez des fruits</h1>
  <form action="fruits.php" method="POST">

    <?php 
        $fh= fopen("fruits.txt", "r+");

        while (!feof($fh)){
          

           $fruit= rtrim (fgets ($fh),"\n\r");
          echo "<input type=\"checkbox\" name=\"choix[]\" value=\"$fruit\">".$fruit."<br>";
      
        }
    
       

?>
    <input type="submit">
  </form><br><br><br>
  <form action ="index.php" method="POST">
    <input type="text" name="newf">
    <input type="submit" value="Ajout fruit">
  </form>

<?php

$newfruit= $_POST;




?>


