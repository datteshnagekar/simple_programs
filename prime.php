<?php
$prime_number = 46;
$count = 0;
for($i = 1; $i <= $prime_number; $i++ )
{
    
    if($prime_number % $i == 0)
    {
        $count++;
        // echo "$prime_number is prime";
       
    }


    
}


if($count > 2)
{
    echo "$prime_number is not a prime number"; 
}
else{
    echo ' $prime_number is a prime number'; 
}

?>