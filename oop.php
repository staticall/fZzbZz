<?php
class fizzBuzz
{
  protected $_min = 1;
  protected $_max = 100;

  protected $_numbers = array();

  /**
   * Class constructor
   *
   * @param mixed $min Min. Can be an array with 2 values
   * @param mixed $max Max
   * @return fizzBuzz Current class instance
   * @throws Exception
   */
  public function __construct($min = null, $max = null)
  {
    if($min === null && $max === null)
    {
      return $this;
    }

    if(empty($min))
    {
      $min = 1;
    }

    if(is_array($min))
    {
      if(count($min) !== 2)
      {
        throw new Exception('You can pass $min as array but it must have only 2 values in it');
      }

      $min = array_values($min);
      $max = $min[1];
      $min = $min[0];
    }

    if(!isset($max))
    {
      $max = 100;
    }

    $min = (int)$min;
    $max = (int)$max;

    if($max >= PHP_INT_MAX)
    {
      $max = 100;
    }

    if($min === $max)
    {
      throw new Exception('$min and $max should be different');
    }

    if($min > $max)
    {
      $max_ = $max;
      $min  = $max;
      $max  = $max_;
      if(isset($max_)) unset($max_);
    }

    $this->_min = $min;
    $this->_max = $max;

    $this->_prepareNumbers();
  }

  /**
   * Prepares $this->_numbers array with passed $this->_min and $this->_max
   *
   * @return fizzBuzz
   */
  protected function _prepareNumbers()
  {
    $this->_numbers = range($this->_min, $this->_max);

    return $this;
  }

  /**
   * Output numbers in correct format. You can pass your own numbers
   *
   * @param array $numbers In case you want to use different numbers
   * @return fizzBuzz
   */
  public function execute(array $numbers = array())
  {
    if(empty($numbers))
    {
      $numbers = $this->_numbers;
    }

    $output = '';

    foreach($numbers as $number)
    {
      $data = '';

      if($number % 3 === 0)
      {
        $data = 'Fizz';
      }

      if($number % 5 === 0)
      {
        $data .= 'Buzz';
      }

      if(!$data)
      {
        $data = $number;
      }

      if($data)
      {
        $output .= $data . "\r\n";
      }
    }

    echo $output;

    return $this;
  }
}

$obj = new fizzBuzz();
$obj->execute();