<?php 
/**
 * 
 */
class Converter 
{
	
	/**
	 * из текстовых в бинарные 
	 * */
	public static function stringToBinary($input)
	{
	  # Sanity check
	  if (!is_string($input)) return null; 

	  # Unpack as a hexadecimal string
	  $value = unpack('H*', $input);

	  # Output binary representation
	  $zero = 0;
	  $output = $zero.base_convert($value[1], 16, 2);	

	  return $output;
	}

}
 ?>