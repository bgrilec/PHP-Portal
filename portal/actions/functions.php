<?php

	//FILTERING FORM DATA
	function dataFilter($data, $type, $get = ''){
		if ($type == "s"){
			if ($get == "get"){
				$final = trim(filter_input(INPUT_GET, $data, FILTER_SANITIZE_STRING));
				return $final;
			}else {
				$final = trim(filter_input(INPUT_POST, $data, FILTER_SANITIZE_STRING));
				return $final;
			}
		}
		if ($type == "e"){
			$final = trim(filter_input(INPUT_POST, $data, FILTER_SANITIZE_EMAIL));
			return $final;
		}
		if ($type == "i"){
			if ($get == "get"){
				$final = trim(filter_input(INPUT_GET, $data, FILTER_SANITIZE_NUMBER_INT));
				return $final;
			}else {
				$final = trim(filter_input(INPUT_POST, $data, FILTER_SANITIZE_NUMBER_INT));
				return $final;
			}
		}
	}
	
	//CONVERT STRING TO URL FRIENDLY
	function convertForUrl($string){
		$lowString = strtolower($string);
		$low = mb_strtolower($string);
		$lowDiaReplace = strtr($low, array('č'=>'c', 'ć'=>'c', 'š'=>'s', 'đ'=>'d', 'ž'=>'z'));
		$finishString = str_replace(" ", "-", $lowDiaReplace);
		return $finishString;
	}
	
	//CONVERT FROM URL
	function convertFromUrl($string){
		$firstBig = ucfirst($string);
		$finishString = str_replace("-", " ", $firstBig);
		return $finishString;
	}
	
	function dataready($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	} 

?>