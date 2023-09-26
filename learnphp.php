<?php
$fruits = ['mango', 'orange', 'naseberry', 'lime'];

foreach ($fruits as $fruit) {
    echo ($fruit . ', ');
}
echo ('<pre>');
print_r($fruits);
echo ('</pre>');
$x = 2;
echo($x*=3);

$y = 'Happy Days';
$z = "That's awesome";
$results = $y===1 ? "Oh no!" : $z;
echo($results);

$andre = null;
$bab = $andre ?? "Andre is nulls";
echo($bab);