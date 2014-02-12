<?php

/*  This is a development file only. The purpose of this PHP file is to access your internal API for testing purposes.
    This file should be removed or ignored for production.
 */

error_reporting(-1);

header('Content-Type: application/json');

$zip = null;

// Get the zip code from the url
if (isset($_GET['z'])) {
    $zip = $_GET['z'];
}

// create the url
$url = "http://your-internal-api-example.com/" . $zip . "/";

// init curl resource
$curl = curl_init();

// set curl options
curl_setopt_array($curl, array(
    CURLOPT_HEADER => false,
    CURLOPT_USERAGENT => 'Mozilla/5.001 (windows; U; NT4.0; en-US; rv:1.0) Gecko/25250101',
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url
));

// Send the request & save response to $response
$response = curl_exec($curl);

echo $response;

?>