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
$apiUrl = 'http://127.0.0.1:5022/Satellite';

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
$arg_x_1 = 50; 
$arg_x_2 = 100;
$arg_x_3 = 100;
$arg_x_4 = 67;
$arg_x_5 = 79;
$arg_x_6 = 80;
$arg_x_7 = 86;
$arg_x_8 = 76;
$arg_x_9 = 34;
$arg_x_10 = 20;
$arg_x_11 = 33;
$arg_x_12 = 34;
$arg_x_13 = 56;
$arg_x_14 = 78;
$arg_x_15 = 55;
$arg_x_16 = 24;
$arg_x_17 = 33;
$arg_x_18 = 20;
$arg_x_19 = 19;
$arg_x_20 = 40;
$arg_x_21 = 60;
$arg_x_22 = 80;
$arg_x_23 = 54;
$arg_x_24 = 36;
$arg_x_25 = 78;
$arg_x_26 = 108;
$arg_x_27 = 117;
$arg_x_28 = 98;
$arg_x_29 = 80;
$arg_x_30 = 9;
$arg_x_31 = 11;
$arg_x_32 = 22;
$arg_x_33 = 44;
$arg_x_34 = 33;
$arg_x_35 = 22;
$arg_x_36 = 40;


$params = array(
    'arg_x.1' => $arg_x_1,
    'arg_x.2' => $arg_x_2,
    'arg_x.3' => $arg_x_3,
    'arg_x.4' => $arg_x_4,
    'arg_x.5' => $arg_x_5,
    'arg_x.6' => $arg_x_6,
    'arg_x.7' => $arg_x_7,
    'arg_x.8' => $arg_x_8,
    'arg_x.9' => $arg_x_9,
    'arg_x.10' => $arg_x_10,
    'arg_x.11' => $arg_x_11,
    'arg_x.12' => $arg_x_12,
    'arg_x.13' => $arg_x_13,
    'arg_x.14' => $arg_x_14,
    'arg_x.15' => $arg_x_15,
    'arg_x.16' => $arg_x_16,
    'arg_x.17' => $arg_x_17,
    'arg_x.18' => $arg_x_18,
    'arg_x.19' => $arg_x_19,
    'arg_x.20' => $arg_x_20,
    'arg_x.21' => $arg_x_21,
    'arg_x.22' => $arg_x_22,
    'arg_x.23' => $arg_x_23,
    'arg_x.24' => $arg_x_24,
    'arg_x.25' => $arg_x_25,
    'arg_x.26' => $arg_x_26,
    'arg_x.27' => $arg_x_27,
    'arg_x.28' => $arg_x_28,
    'arg_x.29' => $arg_x_29,
    'arg_x.30' => $arg_x_30,
    'arg_x.31' => $arg_x_31,
    'arg_x.32' => $arg_x_32,
    'arg_x.33' => $arg_x_33,
    'arg_x.34' => $arg_x_34,
    'arg_x.35' => $arg_x_35,
    'arg_x.36' => $arg_x_36
);


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
	echo "The predicted soil type is:";
	
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
(e.g., ,$arg_x_1 $arg_x_2, etc.) instead of setting them manually
in the Line .
*/
?>