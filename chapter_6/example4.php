<?php // Some array build-in functions https://www.php.net/manual/en/ref.array.php

$check_array = [1, 2, 6, 3, 20, 4];

// is_array checks if the variable is an array
is_array($check_array) ? print '$check_array is an array' : print '$check_array is NOT an array';

// count return array's length
echo "</br>" . count($check_array);

// sort and rsort changes the array order
sort($check_array);
echo "</br>";
foreach ($check_array as $item) echo "$item ";
rsort($check_array);
echo "</br>";
foreach ($check_array as $item) echo "$item ";

// shuffle
echo "</br>";
shuffle($check_array);
foreach ($check_array as $item) echo "$item ";

// explode can split a string into an array
$sentence = 'This is a sentence with seven words';
echo "<br/>$sentence";
$temp = explode(' ', $sentence);
echo "<pre>";
print_r($temp);
echo "</pre>";

// extract gets all key value pair into an assosiative array
extract($_GET, EXTR_PREFIX_ALL, 'fromget');

// compact takes variables into an assosiative array
$fname = 'Doctor';
$sname = 'Who';
$planet = 'Gallifrey';
$system = 'Gridlock';
$constellation = 'kasterborus';

$concat = compact('fname', 'sname', 'planet', 'system', 'constellation');

echo "<pre>";
print_r($concat);
echo "</pre>";


// reset and end return the first and last element of an array respectively
echo "<br/>";
echo reset($check_array);
echo "<br/>";
echo end($check_array);
