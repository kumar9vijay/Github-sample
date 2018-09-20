<?php

echo "<pre>";
print_r($_SERVER);

$str = '123-009';
$exp = explode("-", $str);
//echo strlen($exp[1]);

if(strlen($exp[1]) < 4) {
	//str_pad(string,length,pad_string,pad_type)
	$a = str_pad($exp[1], 4, 0, STR_PAD_LEFT);
}

echo implode("-", array($exp[0], $a) );
echo 'test';
exit;
?>
