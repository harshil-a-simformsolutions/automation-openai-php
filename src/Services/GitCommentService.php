<?php

// Set the comment text
$comment = "Dhang se code kar";

// Set the API endpoint
$url = "https://api.github.com/repos/harshil-a-simformsolutions/automation-openai-php/issues/1/comments";

// Set the access token
$access_token = "YOUR_ACCESS_TOKEN";


// Set the headers
$headers = array(
    "Authorization: Bearer " . $access_token,
    "Accept: application/vnd.github.v3+json",
    "Content-Type: application/json",
);

// Set the data to send
$data = array(
    "body" => $comment,
);

// Create a new cURL resource
$ch = curl_init();

// Set the cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Send the request and get the response
$response = curl_exec($ch);

// Close the cURL resource
curl_close($ch);
