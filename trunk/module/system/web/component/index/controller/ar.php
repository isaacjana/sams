<?php
$a[] = 'a';
$a[] = 'b';
$a[] = 'c';

$b[] = 'd';
$b[] = 'e';
$b[] = 'f';

$c = array_merge( $a , $b ); // Union of $a and $b
print '<pre>';
print_r($c);
print '</pre>';
?> 