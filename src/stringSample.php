<?php
	declare(strict_types = 1);   // strict 모드로 설정함.

	function sum2($x, $y) : float // 반환값의 타입을 float 타입으로 설정함.
	{
		
		return $x + $y;
	};
	var_dump(sum2(3 , 4));   // 오류가 발생함.
	var_dump(sum2(3 , 4.5)); // float

;?>