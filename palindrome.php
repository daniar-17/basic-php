<?php
	function Palindrome($MyString) {
		$l = 0;
		$r = strlen($MyString) - 1;
		$flag = 0;

		while($r > $l){
			echo $MyString[$l] ." $l nilai l \n";
			echo $MyString[$r] ." $r nilai r \n";
			if ($MyString[$l] != $MyString[$r]){
				$flag = 1;
				break;
			}
			$l++;
			$r--;
		}

		if ($flag == 0){
			echo $MyString." is a Palindrome.\n";
		} else {
			echo $MyString." is not a Palindrome.\n";
		}
	}

	Palindrome("radar");
 ?>	