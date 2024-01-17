<?php require_once 'functions.php';
require_once 'header.php' ?>


    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <input type="text" name="new_legume" placeholder="Nouveau légume" required >
      <input type="submit" value="Ajouter un légume">
      <input type="reset" value="Effacer">
    </form>


<?php
display_legumes($legume_file);
?>






</body>
</html>
