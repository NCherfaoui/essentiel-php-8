<?php

define("CONSTANTE01", 66);
function compteur(){
    static $x=0;
    echo "x=".$x."\n";
    $x++;
}
compteur();
compteur();
compteur();
echo "la constante CONSTANTE01 est: ".CONSTANTE01;
echo  __FILE__;
echo __DIR__;
echo __LINE__;

$phrase = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis provident esse officia autem, repellendus nobis nulla doloribus nam repudiandae eos earum repellat dicta ducimus adipisci itaque consectetur incidunt placeat corrupti.\n\n";

$fh= fopen("unfichier.txt", "a+");
fwrite($fh,$phrase);
fclose($fh);

