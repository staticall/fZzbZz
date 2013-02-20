<?php
// Range, from 1 to 100 (usually this is what people need)
$numbers = range(1, 100);

// Run through 1..100
foreach($numbers as $num)
{
  // All numbers multiplied by 3 should be outputted with 'Fizz' word
  if($num % 3 == 0)
  {
    echo 'Fizz';
  }
  // All numbers multiplied by 5 should be outputted with 'Buzz' word
  elseif($num % 5 == 0)
  {
    echo 'Buzz';
  }
  // All numbers multiplied by 3 and 5 should be outputted with 'FizzBuzz' word
  elseif($num % 3 == 0 && $num % 5 == 0)
  {
    echo 'FizzBuzz';
  }
  else
  {
    echo $num;
  }

  echo "\r\n";
}

// PHP script go to heaven
exit(1);