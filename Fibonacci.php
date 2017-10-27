<?php

	function fibonacci($count){
		$arr[] = 1;

		$i=0;
		$b=1;
		while (count($arr) < $count) {
			$tmp = $b;
			$b = $b+$i;
			$i = $tmp;

			$arr[] = $b;
		}

		return $arr;

	}

	var_dump(fibonacci(20));