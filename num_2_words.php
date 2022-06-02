<?php


$numb_2_word = '999';
$arr1 = str_split($numb_2_word);
// $array = array($numb_2_word);
print_r($arr1); 
$ones = array(
    0 =>"ZERO",
    1 => "ONE",
    2 => "TWO",
    3 => "THREE",
    4 => "FOUR",
    5 => "FIVE",
    6 => "SIX",
    7 => "SEVEN",
    8 => "EIGHT",
    9 => "NINE",
    10 => "TEN",
    11 => "ELEVEN",
    12 => "TWELVE",
    13 => "THIRTEEN",
    14 => "FOURTEEN",
    15 => "FIFTEEN",
    16 => "SIXTEEN",
    17 => "SEVENTEEN",
    18 => "EIGHTEEN",
    19 => "NINETEEN",
    "014" => "FOURTEEN"
    );

    $tens = array( 
    0 => "ZERO",
    1 => "TEN",
    2 => "TWENTY",
    3 => "THIRTY", 
    4 => "FORTY", 
    5 => "FIFTY", 
    6 => "SIXTY", 
    7 => "SEVENTY", 
    8 => "EIGHTY", 
    9 => "NINETY" 
    ); 

    $hundreds = array( 
    0 => "HUNDRED", 
    1 => "THOUSAND", 
    2 => "MILLION", 
    3 => "BILLION", 
    4 => "TRILLION", 
    5 => "QUARDRILLION" 
    ); 

$array11 = count($arr1);
print_r($array11); 

if($array11 <= 3)
{
    $hundreds_count = $array11;
}
else if($array11 <= 2)
{
    $hundreds_count = 0;
    $tens_count = $array11;

}
else if($array11 <= 1)
{
    $hundreds_count = 0;
    $tens_count = 0;
    $ones_count = $array11;
}

for($i=1; $i<$array11; $array11++)
{
   
}

?>

<?php

function unique_names(array $array1, array $array2) : array
{
    return [];
}

$names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia