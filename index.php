<?php

// Premiere ligne
function MaFonction() {
    echo "Hello World! <br>";
}

//Deuxieme ligne

MaFonction();

//Troisieme ligne

function maFonctionParam($fname, $lname) {
    echo $fname . " ";
    return $lname;
}

$x = maFonctionParam("doe", "john");
echo $x;



