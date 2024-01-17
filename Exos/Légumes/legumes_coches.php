<?php
require_once 'header.php';
// Make sure the 'legume' key is in the $_POST array and it's not empty
if (isset($_POST['legume']) && !empty($_POST['legume'])) {
    echo "<h1>Le(s) légume(s) choisi(s): </h1>"; 

    // Get the checked legumes from the POST data
    $checked_legumes = $_POST['legume'];

    echo "<ul>";
    foreach ($checked_legumes as $legume) {
        echo "<li>" . htmlspecialchars($legume, ENT_QUOTES, 'UTF-8') . "</li>";
    }
    echo "</ul>";
} else {
    echo "<h1> Aucun légume n'a été choisi.</h1>";
}
?>

