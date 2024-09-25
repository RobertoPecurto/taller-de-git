<?php
// Autor: Roberto Pecurto <robpecesc@alu.edu.gva.es>
require('HolaMundo.php')

print "Introduce tu nombre";
$nombre = trim(fgets(STDIN)) ;
print new HolaMundo($nombre);
?>
