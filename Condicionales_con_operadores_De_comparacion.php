<?php
$a =15;
$b =20;
Print "<h2> El primer ejemplo </h2> <br>";
if ($a == $b) {
 echo "Somos iguales";
}else {
 echo "No somos iguales";
}

$a = 'Fernando';
$b = 'Emanuel';
Print "<h2> El segundo ejemplo </h2> <br>";
if ($a === $b) {
 echo "Somos identicos";
}else {
 echo "No somos identicos";
}

$a = 'Mexico';
$b = 'Japon';
Print "<h2> El tercer ejemplo </h2> <br>";
if ($a != $b) {
 echo "Somos diferentes";
}else {
 echo "No somos diferentes";
}

$a = 12;
$b = 12;
Print "<h2> El cuarto ejemplo </h2> <br>";
if ($a <=> $b) {
 echo "Somos diferentes";
}else {
 echo "No somos diferentes";
}

?>