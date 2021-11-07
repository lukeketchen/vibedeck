<?php

function get_from_all(){
	global $all_url;
	$url = $all_url;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HTTPGET, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response_json = curl_exec($ch);
	curl_close($ch);
	$response = json_decode($response_json, true);
	$one_item_string = json_encode($response['data']);
	$random_number = rand(0, count($response['data']) - 1);
	$one_item = $response['data'][$random_number];

	return $one_item['title'];
}

function get_from_single(){
	global $single_url;
	$url = $single_url;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HTTPGET, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response_json = curl_exec($ch);
	curl_close($ch);
	$response = json_decode($response_json, true);

	return $response;

}
