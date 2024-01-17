<?php
$legume_file = 'liste_legumes.txt';

// Cette fonction ajoute un nouveau légume au fichier
function add_legume($legume_name, $file) {
    // On ouvre le fichier en mode append (a) pour ajouter du contenu à la fin
    $handle = fopen($file, 'a');
    // On écrit le nom du légume suivi d'un saut de ligne
    fwrite($handle, $legume_name."\n");
    // On ferme le fichier
    fclose($handle);
}

// Cette fonction affiche tous les légumes avec des cases à cocher à côté
function display_legumes($file) {


    // On ouvre le fichier en mode lecture (r)
    $handle = fopen($file, 'r');
    // On lit le fichier ligne par ligne
    echo '<form  action="legumes_coches.php" method="POST"  target="result" onsubmit="window.open(\'\',\'result\',\'width=600,height=400\')" >';
    
    while(($line = fgets($handle)) !== false) {
        // On affiche une case à cocher avec le nom du légume
        echo '<input type="checkbox" name="legume[]" value="'.trim($line).'">'.trim($line).'<br>';
    }
    // On ferme le fichier
    fclose($handle);
    
    // Ajout d'un bouton pour envoyer à la page "legumes coches php"
    
    echo '<input type="submit" value="Afficher les légumes cochés">';
    echo ' </form>';
}

// Cette fonction vérifie si le légume est valide
function valid_legume($legume_name, $file) {
    // On ouvre le fichier en mode lecture (r)
    $handle = fopen($file, 'r');

    // Trim the input legume name to remove spaces
    $trimmed_legume_name = trim($legume_name);

    // On vérifie si le nom du légume n'est pas vide, si non on retourne false
    if(empty($trimmed_legume_name)) {
        echo 'Le nom du légume ne peut être vide';
        return false;
    }

    // On lit le fichier ligne par ligne
    while(($line = fgets($handle)) !== false) {
        // Si le légume existe déjà dans le fichier, on retourne false
        if(strtoupper(trim($line)) == strtoupper($trimmed_legume_name)) {
            fclose($handle);
            return false;
        }
    }
    // On ferme le fichier
    fclose($handle);

    return true;
}

// On vérifie si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si le champ 'new_legume' est défini et que le légume est valide, on l'ajoute au fichier
    if (isset($_POST['new_legume']) && valid_legume($_POST['new_legume'], $legume_file)) {
        add_legume($_POST['new_legume'], $legume_file);
    }
}




