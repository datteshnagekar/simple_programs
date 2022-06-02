<?php

$number_to_sum = 123456789;

$sum = 0;
$rem = 0;

for($i=0; $i<=strlen($number_to_sum); $i++)
{
   $rem = $number_to_sum % 10;
   $sum = $sum + $rem;
   $number_to_sum = $number_to_sum / 10;
}
echo " value of sum numbers is $sum";

?>