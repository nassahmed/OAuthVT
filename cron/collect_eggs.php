<?php

include __DIR__.'/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client( [
	'base_uri' => 'http://coop.apps.knpuniversity.com',
	'defaults' => [
		'exceptions' => false,
	]
]);

// Effectuer une collecte

$response = $client->post( 'api/2024/eggs-collect', [
	'headers' => [
		'Authorization' => 'Bearer token'
	]
]);

echo $response->getBody();
echo "\n\n";

// Obtenir le token

// $response = $client->request('POST', '/token', [
// 	'form_params' => [
// 	     'client_id' => 'testing OAUTH',
// 	     'client_secret' => '60e45bd659df38f66e1c1ab7c3ddc877', 
// 	     'grant_type' => 'client_credentials'
// 	]
// ]); 

// echo $response->getBody();
// echo "\n\n";