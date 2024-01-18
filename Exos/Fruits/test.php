<?php
function ajoute3($x){
    // passage par valeur de $x 
    $x+=3;
    return($x);
}
function ajouteRef(&$sx){
    $x=12;
    return($x);


}
$y=0;
echo ajoute3($y)."\n";
echo $y."\n";

echo ajouteRef($y)."\n";
echo $y."\n";



function fact ($n){
if ($n>1): return $n* fact($n-1);
    else: return 1;
endif;
}

echo "fact: ".fact(170);