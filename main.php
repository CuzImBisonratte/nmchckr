<?php 
	// Get url
	$url = $_POST["url"];
	$username = $_POST["username"];
	$curl = curl_init();
	curl_setopt_array($curl, [
	CURLOPT_URL => "https://" . $url . $username,
	CURLOPT_RETURNTRANSFER => true
	]);
	curl_exec($curl);
	$response = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);
	echo $response;
	exit();

?>