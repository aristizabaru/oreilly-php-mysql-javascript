<?php // Loops
/*
This examples uses the alternative syntax without brackets,
if there's more than one sentence brackets will be needed
*/

$count = 0;

echo "<p>While loop</p>";
while (++$count < 11)
    echo "$count <br/>";

echo "<p>Do while loop</p>";
do
    echo "$count <br/>";
while (++$count < 21);

echo "<p>For loop</p>";
for ($count = 0; $count < 11; $count++)
    echo "$count <br/>";
