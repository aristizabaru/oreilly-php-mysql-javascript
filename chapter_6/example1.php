<?php // Indexed arrays

// Create an indexed array
$paper = array('Copier', 'Inkjet');

// Add elements to an initialized array
$paper[] = 'Laser';
$paper[] = 'Photo';

for ($i = 0; $i < 4; $i++)
    echo "$i: $paper[$i]<br/>";

// Alternative syntax
$aternativeSyntax = ['item 1', 'item 2'];
