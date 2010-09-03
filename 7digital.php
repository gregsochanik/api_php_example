<?php
	require_once("SevenDigitalApi/SevenDigitalApi.php");
	// Open connectio to the API	
	
	function GetRandom($from, $to) {
		//print "here";
		$api = new SevenDigitalApi();
		$api->ConsumerId = "test-api";
		$api->Country = "GB";
		$api->OutputType="json";
	
		$randomTrackId = rand($from, $to);
		
		$json = $api->GetTrackDetailsById($randomTrackId);		
		if($api->Api->Status == "Error") {
			return GetRandom($to, $from);
		}
		return $json;
	}
	
	
	// create random	
	$json = GetRandom(1, 100000);
	
	//header("Content-type: txt/json");
	echo($json);
?>

