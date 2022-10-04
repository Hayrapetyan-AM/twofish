<?php 
include 'conveter.php';
/**
 * 
 */
class twoFish 
{
  const MIN_SYMBOL_COUNT = 16;

  public static function init($string)
  {
    # converting string to array
    $array_from_string = str_split($string);

    # if string symbols are less than 16 e.k. less than 128 bits returning false
    if (count($array_from_string) < self::MIN_SYMBOL_COUNT) {
      return false;
    }

    # fill array with binary equivalents for each symbol
    foreach ($array_from_string as &$value) {
      $value = Converter::stringToBinary($value);
    }

    # chunk array into 128 bites - 16 bytes
    $chunked_array = array_chunk($array_from_string, 16);

    #if there are less than 16 symbols per block - fill that block with zeros 
    foreach ($chunked_array as &$block_128_bit) {
      while (count($block_128_bit) < 16) {
        array_push($block_128_bit, '00000000');
      }
    }

    foreach ($chunked_array as &$block_128_bit) {
      self::input_whitening(array_chunk($block_128_bit, 4));
    }

  }

  public static function input_whitening($sub_block_32_bit)
  {
    print_r($sub_block_32_bit);
    echo '<br>';
  }

}
 ?>