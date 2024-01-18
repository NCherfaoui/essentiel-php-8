<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1> Choisissez des fruits</h1>
  <form action="choix.php" method="POST">
    <?php 
     require_once("functions.php");
     $filename = "fruits.txt";
     display_fruits($filename); ?>

    <input type="submit">
  </form><br><br><br>
  <form action ="index.php" method="POST">
    <input type="text" name="newf" required>
    <input type="submit" value="Ajout fruit">
  </form>
  <?php
 


   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
       if (isset($_POST["newf"]) ) {

           $newfruit = $_POST["newf"];
           $choix[] = $newfruit;
           $fh = fopen($filename, "a");
           fwrite($fh, "$newfruit\n");
           fclose($fh);
          
       }















      
      //  header("Location: results.php?choix=" . urlencode(implode(",", $choix)));
      //  exit;
   }

?>


</body>

</html>



