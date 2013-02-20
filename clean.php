<?php
// Range, from 1 to 100 (usually this is what people need)
$numbers = range(1, 100);

// Run through 1..100
foreach($numbers as $num)
{
  // Empty string. Will be used for output
  $str = '';

  // All numbers multiplied by 3 should be outputted with 'Fizz' word
  if(($num % 3) === 0)
  {
    $str = 'Fizz';
  }

  // All numbers multiplied by 5 should be outputted with 'Buzz' word. All numbers multiplied by 3 and 5 should be outputted with 'FizzBuzz' word
  if(($num % 5) === 0)
  {
    $str .= 'Buzz';
  }

  // If we got any word (number % 3 or % 5 or % 3 and % 5)
  if(!$str)
  {
    $str = $num;
  }

  // Output it in this format: "%num%: %str%". You can change it, if you got that brainz thingy
  echo $str ."\r\n";
}

// PHP script go to heaven
exit(1);