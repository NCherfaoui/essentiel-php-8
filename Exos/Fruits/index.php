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
    <input type="text" name="newf">
    <input type="submit" value="Ajout fruit">
  </form>
  <?php
  require_once("functions.php");


   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (isset($_POST["newf"])) {

           // Add the new fruit to the file and display it in the form
           $newfruit = $_POST["newf"];
           $choix[] = $newfruit;
           $fh = fopen($filename, "a");
           fwrite($fh, "$newfruit\n");
           fclose($fh);
          
       }

       // Redirect to the results page
       header("Location: results.php?choix=" . urlencode(implode(",", $choix)));
       exit;
   }

?>


</body>

</html>



