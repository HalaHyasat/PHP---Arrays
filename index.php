<?php 
//Question number 1
$color = array ("white", "green", "red", "blue", "black");

echo "Q(1): <br>The memory of that scene for me is like a frame of film forever frozen at that
moment: the red carpet, the ".$color[1]." lawn, the ".$color[0]." house, the leaden sky. The
new president and his first lady. - Richard M. Nixon <br>";

//Question number 2
echo "Q(2): <ul>
<li> $color[0] </li>
<li> $color[1] </li>
<li> $color[2] </li>
</ul>";

//Question number 3
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;

echo "Q (3): <br>";
asort($cities) ;
foreach($cities as $country => $capital)
{
echo "The capital of $country is $capital <br>" ;
}

//Question number 4
echo "Q(4): <br>";
$x = array(1, 2, 3, 4, 5);
var_dump ($x);
echo "<br>";
unset($x[3]);
var_dump ($x);
echo "<br>";

//Question number 5
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo "Q(5): <br>$color[4] <br>";

//Question number 7
echo "Q(7): <br>";
$x = array(1, 2, 3, 4, 5);
foreach ($x as $spliced) 
echo "$spliced ";
array_splice( $x, 3, null, "$" ); 
echo "<br>";
foreach ($x as $spliced) 
echo "$spliced ";
echo "<br>";

//Question number 8
$arr8 = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($arr8);
echo "Q(8): a) <br>";
foreach($arr8 as $name => $age)
{
echo "$name is $age years old.<br>" ;
}

ksort($arr8);
echo "b) <br>";
foreach($arr8 as $name => $age)
{
echo "$name is $age years old.<br>" ;
}

arsort($arr8);
echo "c) <br>";
foreach($arr8 as $name => $age)
{
echo "$name is $age years old.<br>" ;
}

krsort($arr8);
echo "d) <br>";
foreach($arr8 as $name => $age)
{
echo "$name is $age years old.<br>" ;
}

//Question number 9
$Arr9 = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$sum = 0;
$length = count($Arr9);
foreach($Arr9 as $temp)
{
 $sum += $temp;
}
 $avg = $sum/$length;
 echo "Q(9):<br>Average Temperature is: $avg <br>"; 
sort($Arr9);
echo "List of seven lowest temperatures: ";
for ($i=0; $i< 7; $i++)
{ 
echo "$Arr9[$i], ";
}
echo "<br>";
echo "List of seven highest temperatures: ";
for ($i=($length-7); $i< ($length); $i++)
{
echo "$Arr9[$i], ";
}
echo "<br>";

//Question number 11
$array1 = array(array(70, 40), array(25, 45));
$array2 = array("example", "com");

function merge_arrays_by_index($x, $y)
{
$temp = array(); $temp[] = $x; if(is_scalar($y))
{
$temp[] = $y;
}
else
{
foreach($y as $k => $v)
{
$temp[] = $v;
}
}
return $temp;
}
echo 'Q(11): <pre>'; print_r(array_map('merge_arrays_by_index',$array2, $array1));

//Question number 12
$color = array("A" => "Blue", "B" => "Green", "C" => "Red");
echo "Q(12): <br>Values are in lower case.<br>";
foreach ($color as $key => $value){ 
$color[$key] = strtolower($value);}
print_r($color);

echo "Values are in upper case.<br>";
foreach ($color as $key => $value){ 
$color[$key] = strtoupper($value);}
print_r($color);


//Question number 13
echo "Q(13): <br>".implode(",",range(200,250,4))."<br>";

//Question number 14
$Arr14 = array("abcd","abc","de","hjjj","g","wer");
$arrLength = array_map('strlen', $Arr14);
echo "Q(14): <br>The shortest array length is ".min($arrLength).". The longest array length is ".max($arrLength)."<br>";

//Question number 15
$n=range(11,20);
shuffle($n);
echo "Q(15): <br>";
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "<br>";

//Question number 16
$Arr16 = array (1, 2, 10, 12, -1, 0, 25);
$maxNum = null;
foreach($Arr16 as $number)
{
    if ($maxNum < $number)
    $maxNum = $number;
}
echo "Q(16):<br>The largest key in the array is ".$maxNum."<br>" ;

//Question number 17
function minVal($values) 
{
    $minNum = 1000000000000000000000000000000000;
    foreach($values as $number)
{
    if ($number != 0){
    if ($minNum > $number)
    $minNum = $number;
}}

return "$minNum";
}
echo "Q(17):<br>".(minVal(array(11, 5, 0, 12, 10, 25)))."<br>";

//Question number 18
function floorDec($number, $precision, $separator)
{
$num = explode($separator, $number);
$num[1] = substr_replace($num[1],$separator,$precision,0);
if($num[0] >= 0)
{$num[1] = floor($num[1]);}
else
{$num[1] = ceil($num[1]);}

$ceil_number= array($num[0],$num[1]);
return implode($separator,$ceil_number);
}
echo "Q(18): <br>".(floorDec(1.155, 2, "."))."<br>".(floorDec(100.25781, 4, "."))."<br>".(floorDec(-2.9636, 3, "."))."<br>";

//Question number 19
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo "Q(19): <br>".$color["holes"][5]."<br>". $color["color"]["a"]."<br>";

//Question number 20
function priorty($a, $b) 
{ 
$order = array (4, 3, 2, 1);
foreach($order as $key => $value) { 
if($a==$value) { 
return 0; 
break;} 

if($b==$value) { 
return 1; 
break;} 
} 
} 

$Arr20 = array (1, 3, 2, 4, 2, 4, 3, 4, 3, 4);
usort($Arr20, "priorty");
echo  "Q(20): <br>";
print_r($Arr20);
echo "<br>";


//Question number 24
$Names = array("Hala", "Heba", "Ghaida'a", "Salsabeel");
sort($Names, SORT_FLAG_CASE);
echo "Q(24): <br>";
foreach ($Names as $val) {
    echo $val . "<br>";
}

?>