<?php
// print_r($_POST);
if($_POST== null){
    echo "Aucun fruit n'est sélectionné";
} else {
    foreach( $_POST["choix"] as $fr ){
        
        echo "<h3> Vous avez choisi ".$fr."</h3>";
    }


}