<?php
# *****************************************************************************
# Lab 14: Consume data from the Plumber API Output (using PHP) ----
#
# Course Code: BBT4206
# Course Name: Business Intelligence II
# Semester Duration: 21st August 2023 to 28th November 2023
#
# Lecturer: Allan Omondi
# Contact: aomondi [at] strathmore.edu
#
# Note: The lecture contains both theory and practice. This file forms part of
#       the practice. It has required lab work submissions that are graded for
#       coursework marks.
#
# License: GNU GPL-3.0-or-later
# See LICENSE file for licensing information.
# *****************************************************************************

// Full documentation of the client URL (cURL) library: https://www.php.net/manual/en/book.curl.php

// STEP 1: Set the API endpoint URL
$apiUrl = 'http://127.0.0.1:5022/diabetes';

// Initiate a new cURL session/resource
$curl = curl_init();

// STEP 2: Set the values of the parameters to pass to the model ----
/*
// The prediction should be "positive" for diabetes
$arg_pregnant = 1;
$arg_glucose = 148;
$arg_pressure = 72;
$arg_triceps = 35;
$arg_insulin = 0;
$arg_mass = 33.6;
$arg_pedigree = 0.627;
$arg_age = 50;
*/ 

// The prediction should be "negative" for diabetes
$arg_pregnant = 1;
$arg_glucose = 85;
$arg_pressure = 66;
$arg_triceps = 29;
$arg_insulin = 0;
$arg_mass = 26.6;
$arg_pedigree = 0.351;
$arg_age = 31;

$params = array('arg_pregnant' => $arg_pregnant, 'arg_glucose' => $arg_glucose,
                'arg_pressure' => $arg_pressure, 'arg_triceps' => $arg_triceps,
                'arg_insulin' => $arg_insulin, 'arg_mass' => $arg_mass,
                'arg_pedigree' => $arg_pedigree, 'arg_age' => $arg_age);

// STEP 3: Set the cURL options
// CURLOPT_RETURNTRANSFER: true to return the transfer as a string of the
// return value of curl_exec() instead of outputting it directly.
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$apiUrl = $apiUrl . '?' . http_build_query($params);
curl_setopt($curl, CURLOPT_URL, $apiUrl);

// For testing:
echo "The generated URL sent to the API is:<br>".$apiUrl."<br><br>";

// Make a GET request
$response = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    $error = curl_error($curl);
    // Handle the error appropriately
    die("cURL Error: $error");
}

// Close cURL session/resource
curl_close($curl);

// Process the response
// echo "<br>The predicted output in JSON format is:<br>" . var_dump($response) . "<br><br>";

// Decode the JSON into normal text
$data = json_decode($response, true);

// echo "<br>The predicted output in decoded JSON format is:<br>" . var_dump($data) . "<br><br>";

// Check if the response was successful
if (isset($data['0'])) {
    // API request was successful
    // Access the data returned by the API
	echo "The predicted diabetes status is:<br>";
	
    // Process the data
	foreach($data as $repository) {
		echo $repository['0'],$repository['1'],$repository['2'],"<br>";
	}
} else {
    // API request failed or returned an error
    // Handle the error appropriately
    echo "API Error: " . $data['message'];
}

// REQUIRED LAB WORK SUBMISSION:
/*
Create a form in the web user interface to post the parameter values
(e.g., $arg_pregnant, $arg_glucose, etc.) instead of setting them manually
in Line 22-49.
*/
?>