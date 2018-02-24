<?php
// write your code in PHP7.0
$x = 2147413647;
/*
9 '1001' = 2
15 '1111' = 0
20 '10100' = 1
529 '1000010001' = 4
1041 '10000010001' = 5
2147483647 '31*1' = 0
2147413647 '1111111111111101110111010001111' = 3
*/

function solution($N) {
	$s = decbin ($N);
	echo $s,',';
	$a = explode('1', $s);
	print_r($a);
	$max = 0;
	foreach($a as $v) {
		$len = strlen($v);
		if ($len > $max) $max = $len;
	}
	return $max;
}

echo solution($x);