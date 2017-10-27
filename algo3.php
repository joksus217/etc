<?php

	function algo3($number) {
		$str = '' . $number;

		$l = strlen($number);
		$x = 0;

		$r = [];

		while ($x < $l) {
			$i = $x+1;
			$s = '';
			while ($i < $l) {
				$s .= '0';
				$i ++;
			}
			$r[] = $str{$x} . $s;
			$x ++;
		}

		return $r;
	}

	var_dump(algo3(1345679));