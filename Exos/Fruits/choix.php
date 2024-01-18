<?php
// print_r($_POST);
// if($_POST== null){
//     echo "Aucun fruit n'est sélectionné";
// } else {
//     $fruitsChoisis = $_POST["choix"];
//     foreach($fruitsChoisis as $fruit){
//         echo "<h3> Vous avez choisi $fruit </h3>";
//     }
// }


if (isset($_POST['choix']) && !empty($_POST['choix'])) {
    $choix = $_POST['choix'];
    echo "Vous avez choisi le(s) fruit(s) suivant(s) : ";
    echo "<ul>";
    foreach ($choix as $fruit) {
        echo "<li>" . htmlspecialchars($fruit, ENT_QUOTES, 'UTF-8') . "</li>";
    }
    echo "</ul>";
} else {
    echo "Aucun fruit n'est sélectionné";
   

}




