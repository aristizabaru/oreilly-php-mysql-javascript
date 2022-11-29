<?php // foreach and list

$paperAssociative = [
    'copier' => 'Copier & Multipurpose',
    'inkjet' => 'Inkjet Printer',
    'laser' => 'Laser Printer',
    'photo' => 'Photographic Paper',
];

$paperIndexed = [
    'copier',
    'inkjet',
    'laser',
    'photo',
];

echo "INDEXED ARRAY<br/>";
foreach ($paperIndexed as $item) {
    echo $item . "<br/>";
}
echo "<br/>ASSOCIATIVE ARRAY<br/>";
foreach ($paperAssociative as $item => $description) {
    echo "$item: $description <br/>";
}

/*
list() is used to unpack values from an array to
a set of variables in one operation.
*/

// Listing all the variables
list($a, $b) = array('Alice', 'Bob');

echo "a=$a b=$b";
