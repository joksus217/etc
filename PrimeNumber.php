<?php

	function checkNumber($number) {
		$i = 2;
		$c = true;
		while ($i < 10 && $c == true) {
			if($number%$i == 0 && $number != $i){
				$c = false;
			} else {
				$c = true;
			}
			$i++;
		}

		return $c;

	} 

	function getPrimeNumber($n){
		$x = array();
		$y = 2;
		while (count($x) < $n) {
			if(checkNumber($y)){
				$x[] = $y;
			}

			$y++;
		}

		return $x;
	}

	var_dump(getPrimeNumber(20));