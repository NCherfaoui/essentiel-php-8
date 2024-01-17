<?php

if ($_POST["checkbox"] == true){
    
        $handler = fopen('users.csv', 'a');
        fputcsv($handler, [
            $_POST["nom"],
            $_POST["prenom"],
            $_POST["age"]
           
        ]);
        fclose($handler);

    } else{
        $fh= fopen("record.csv", "a");

foreach($_POST as $fields ){

fwrite($fh,$fields.';');

}
fwrite($fh,PHP_EOL);
fclose($fh);

    }
?>








