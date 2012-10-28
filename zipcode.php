<?php
	ini_set('memory_limit' ,'1024M');
	
	if (!isset($_POST["zip"])) {
		exit;
	}
	
	$file = "data/KEN_ALL.CSV";		//郵便番号CSV
	$zip = $_POST["zip"];
	$tmp = fopen($file, "r");
	
	$result = null;
	while (($row = fgetcsv($tmp)) !== FALSE) {
		mb_convert_variables("UTF-8", "SJIS-win", $row);
		if ($row[2] == $zip) {
			$result = $row[6] . $row[7] . $row[8];
			break;
		}
	}
	fclose($tmp);
	if (isset($result)) {
		echo $result;
	}
?>