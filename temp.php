<?php 
/**
	 * из символа в hex
	 * */
	function char2hex($text){
		$value = unpack('H*', $text);
		return base_convert($value[1], 16, 16);
    }

	/**
	 * из hex в бинарный
	 * */
	function hexbin($hex){ 
	   $bin=''; 
	   for($i=0;$i<strlen($hex);$i++) 
	       $bin.=str_pad(decbin(hexdec($hex{$i})),4,'0',STR_PAD_LEFT); 
	      return $bin; 
	}

	function hex2bin($str) {
	    $bin = "";
	    $i = 0;
	    do {
	        $bin .= chr(hexdec($str{$i}.$str{($i + 1)}));
	        $i += 2;
	    } while ($i < strlen($str));
	    return $bin;
	}

	function bin2bstr($input)//из бинарных в текстовые // Convert a binary expression (e.g., "100111") into a binary-string
	{
	  if (!is_string($input)) return null; // Sanity check
	  // Pack into a string
	  return pack('H*', base_convert($input, 2, 16));
	}
	// Returns string(3) "ABC"
	//var_dump(bin2bstr('01000001 01000010 01000011'));
	// Returns string(24) "010000010100001001000011"
	//var_dump(bstr2bin('ABC'));
	}
 ?>