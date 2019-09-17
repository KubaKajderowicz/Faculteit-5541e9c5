<?php

$value = readline("Van welk getal wil je de faculteit weten? ");
$f = 1;
for ($x=$value; $x>=1; $x--)   
{  
  $f = $f * $x;  
} 

echo $f;