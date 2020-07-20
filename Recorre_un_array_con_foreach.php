<?php
$array = [
    uno => 'Mexico',
    Dos => 'Estados Unidos',
    Tres => 'Brasil',
];
Print "<h2> Ejemplo de array </h2><br>";
var_dump($array);
var_dump('Brasil');
foreach ($array as $key => $value) {
    echo "</br>";
    echo "El valor de $key es : $value";
}
?>  