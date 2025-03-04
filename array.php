<!-- <?php
$name =array("enas" , "ahmad", "baselko");
print_r($name);
echo "<br>";
var_dump($name);
echo "<br>";
$name [0]= "malik";
var_dump($name);


?> -->

 <?php
 $color = array ("red","green","white");
   $paragraph ="The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[0];
carpet, the $color[1]; lawn, the $color[2] house, the leaden sky. The new president and his first lady. -
Richard M. Nixon";
  echo $paragraph;
echo "<hr>";   
// task 2
$color = array("red","green","white");
echo "<ul>" ;

foreach ($color as $color){
    echo "<Li> $color </li>";
}
echo "</ul>" ;
echo "<hr>";   


// task 3
$cities = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid");
asort($cities);
foreach ($cities as $country => $capital){
echo "The capital of " . $country . " is " . $capital . "<br>";

}
// task4
echo "</ul>" ;
echo "<hr>"; 
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];
 
// task5
echo "<br>" ;
echo "<hr>"; 
 $number =[1,2,3,4,5];
 $newitem ="$";
 array_splice($number , 3 , 0 , $newitem);
 foreach ($number as $item){
    echo $item;
 }  
 echo "<br>" ;
echo "<hr>"; 
 $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple
");
sort($fruits);
foreach($fruits as $r => $r_value){
 echo "key= ". $r ."value =". $r_value;
}
echo "<br>" ;
echo "<hr>"; 
//task7;
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temperatures) / count($temperatures);
sort($temperatures);
$lowestTemperatures = array_slice($temperatures, 0, 5);
rsort($temperatures);
$highestTemperatures = array_slice($temperatures, 0, 5);
echo "Average Temperature is: " . number_format($average, 1) . "<br>";
echo "List of five lowest temperatures: ";
echo implode(", ", $lowestTemperatures) . "<br>";
echo "List of five highest temperatures: ";
echo implode(", ", $highestTemperatures) . "<br>";


echo "<br>" ;
echo "<hr>"; 
//task8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
 
print_r(array_merge($array1 ,$array2));

echo "<br>" ;
echo "<hr>"; 
//task9;
function convertToUpper($array){
   return  array_map("strtoupper", $array); 
}

$colors = array("red","blue", "white","yellow");
$newcolors= convertToUpper($colors);
echo "Array";
echo "( <br>";

foreach ($newcolors as $color){
    echo $color. "<br>";
}
echo ")";

echo "<br>" ;
echo "<hr>"; 
//task10
function convertToUpper2($array){
    return  array_map("strtolower", $array); 
 }
$colors2 = array("RED","BLUE", "WHITE","YELLOW");
$newcolors2= convertToUpper2($colors2);
echo "Array";
echo "( <br>";

foreach ($newcolors2 as $colors){
    echo $colors. "<br>";
}
echo ")";



echo "<br>" ;
echo "<hr>"; 
//task11
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$lengths = array_map('strlen', $words);

$shortest = min($lengths);
$longest = max($lengths);

echo "The shortest array length is " . $shortest . ". ";
echo "The longest array length is " . $longest . ".";


echo "<br>" ;
echo "<hr>"; 
//task12
function lowestNonZero($array) {
    $filteredArray = array_filter($array, function($value) {
        return $value != 0;
    });

    return min($filteredArray);
}

$array1 = array(2, 0, 10, 12, 6);
echo "The lowest non-zero integer is: " . lowestNonZero($array1);

?>
