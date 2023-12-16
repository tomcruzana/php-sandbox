<?php
	function calc($n1, $n2, $operator){
		if($operator == "+"){
			return $n1 + $n2;
		}
		if($operator == "-"){
			return $n1 - $n2;
		}
		if($operator == "x"){
			return $n1 * $n2;
		}
		if($operator == "/"){
			return $n1 / $n2;
		}
		else{
			return "invalid operator";
		}
		
	}
	
	echo calc(2,10,"xx");
?>