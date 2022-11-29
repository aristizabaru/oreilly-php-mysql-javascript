<?php // Associative arrays

$paper = array(
    'copier' => 'Copier & Multipurpose',
    'inkjet' => 'Inkjet Printer'
);

$paper['laser'] = 'Laser Printer';
$paper['photo'] = 'Photographic Paper';

// Using the short array syntax
$paper_alternative_syntax = [
    'copier' => 'Copier & Multipurpose'
];

echo $paper['laser'];
