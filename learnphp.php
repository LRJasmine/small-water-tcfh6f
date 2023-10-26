<?php
ob_start();
include 'partials/nav.php';
$nav = ob_get_clean();
echo($nav);
$nav = str_replace('Menu', 'Belly Tingz', $nav);
echo($nav);

$fruits = ['mango', 'orange', 'naseberry', 'lime'];

foreach ($fruits as $key => $fruit) {
    echo ($key. ': '.$fruit . ', ');
}
echo ('<pre>');
print_r($fruits);
echo ('</pre>');
$x = 2;
echo($x*=3);
echo('<hr>');

$y = 'Happy Days';
$z = "That's awesome";
$results = $y===1 ? "Oh no!" : $z;
echo($results);
echo('<hr>');

$andre = null;
$bab = $andre ?? "Andre is nulls";
echo($bab);
echo('<hr>');
$expense = 350;
$dailyspend = 200;
$budget = 1000000;
while ($expense <= $budget){
    $expense -= $dailyspend/2;
    $expense+=$dailyspend*7;
    if($expense == 1000){
        break;
    }
    if ($expense>2000 && $expense<8000){
        echo("<p>Let's skip 2000 to 8000 because expense is: $".$expense.'</p>');
        continue;
    }
}
echo('<p style="color:red;">$'.$expense.'</p>');

$girlnames = ['Millie','Dorothy','Abbie','Sue','Betsy'];
for ($i = 0, $girlnameslen=sizeof($girlnames); $i<$girlnameslen; print($girlnames[$i].'<br/>'), $i++){}

echo('<hr/>');

$dog = 'Boxer';
switch($dog){
    case 'Duckie':
        echo($dog.': She is a Spaniel<br/>');
        break;
    case 'Boxer':
        echo($dog.': He is a Duchshund<br/>');
        break;
        case 'Missy':
            echo($dog.': She is a Goldern Retriever<br/>');
            break;
    default:
        echo($dog.': The sweetest dog on the planet<br/>');
}

$cat = "Amy";

match($cat){
    'Lucy' => print 'She is a darling',
    'Vee','Gayle' => print 'She is a troublesome',
    'Hailey' => print 'She is a fierce',
    default => print 'Just the cutest cat around town'
};

function plantopia():string {
    echo("<p>Welcome to Plantopia!</p>");
    return "Hey";
}
plantopia();

function plantlists(...$plants){
    foreach($plants as $plant ){
        echo("<p>I love ".$plant." in my gardens.</p>");
    }
    global $cat;
    echo($cat);
}
plantlists('Bouganvilla', 'Lillies', 'Ochids', 'Cherries');

function dsresses (string ...$dresses):string {
    $dressesparagraph = '';
    foreach($dresses as $dress){
        $dressesparagraph.='<p>I just love me some '. $dress .' dresses</p>';
    }
    return $dressesparagraph;
}

$mydress = 'dresses';

if (is_callable($mydress)){
    echo ($mydress('Amy', 'Sam', 'Deliece'));
} else {
    echo('<p>Girl, you need to get some dresses!</p>');
}

// Anonymous functions
$breakfast = function (string ...$breakfastmenu) use($fruits): string {
    return ('<p>I love '. implode(', ',$breakfastmenu) .' foods and '. implode(', ', $fruits) );
};
echo($breakfast('Eggs', 'Cornbread', 'Cabbage', 'Callaloo'));

// Callback function
$cars = function (callable $callback, int|float ...$cost):int|float{
    return $callback(array_sum($cost));
};

function cargct($element){
    return $element/100;
}
echo('<p>$'. number_format($cars('cargct',45782.00, 14000000, 87.2, 658745888.21),2) .'</p>');

// Workingr with filesystem
$dir = scandir(__DIR__);

var_dump($dir);