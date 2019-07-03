<?php

	$numberWordMap = [
		0  => "zero",
		1  => "one",
		2  => "two",
		3  => "three",
		4  => "four",
		5  => "five",
		6  => "six",
		7  => "seven",
		8  => "eight",
		9  => "nine",
		10 => "ten",
		11 => "eleven",
		12 => "twelve",
		13 => "thirteen",
		14 => "fourteen",
		15 => "fifteen",
		16 => "sixteen",
		17 => "seventeen",
		18 => "eighteen",
		19 => "nineteen",
		20 => "twenty",
		30 => "thirty",
		40 => "forty",
		50 => "fifty",
		60 => "sixty",
		70 => "seventy",
		80 => "eighty",
		90 => "ninety",
	];

	function numberToWord($number, $numberWordMap)
	{
		$stringRep = '[' . $number . ']: ';

		// If we already have the number in the map, just return it
		if (array_key_exists($number, $numberWordMap)) {
			return $stringRep . $numberWordMap[$number] . PHP_EOL;
		}
		else {
			// Build up an English word representation of the number
			$thousands = ($number / 1000) % 10;
			$hundreds  = ($number / 100) % 10;

			// multiply by ten so we get indices of irregular word for 10s place
			$tens      = (($number / 10) % 10) * 10;
			$ones      = ($number / 1) % 10;

			if ($thousands > 0) {
				$stringRep .= $numberWordMap[$thousands] . ' thousand ';
			}

			if ($hundreds > 0) {
				$stringRep .= $numberWordMap[$hundreds] . ' hundred ';
			}

			if ($tens > 0) {
				$stringRep .= $numberWordMap[$tens] . ' ';
			}

			if ($ones > 0) {
				$stringRep .= $numberWordMap[$ones];
			}
		}

		return $stringRep . PHP_EOL;
	}

	echo numberToWord(7049, $numberWordMap);
	echo numberToWord(9999, $numberWordMap);
	echo numberToWord(0,    $numberWordMap);
	echo numberToWord(49,   $numberWordMap);
	echo numberToWord(7149, $numberWordMap);
	echo numberToWord(704,  $numberWordMap);

?>
