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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // STEP 1: Set the API endpoint URL
    $apiUrl = 'http://127.0.0.1:5022/Satellite';

    // Initiate a new cURL session/resource
    $curl = curl_init();

    // STEP 2: Set the values of the parameters to pass to the model
    $params = array(
        $data = [
            'arg_x.1' => $_POST['arg_x.1'],
            'arg_x.2' => $_POST['arg_x.2'],
            'arg_x.3' => $_POST['arg_x.3'],
            'arg_x.4' => $_POST['arg_x.4'],
            'arg_x.5' => $_POST['arg_x.5'],
            'arg_x.6' => $_POST['arg_x.6'],
            'arg_x.7' => $_POST['arg_x.7'],
            'arg_x.8' => $_POST['arg_x.8'],
            'arg_x.9' => $_POST['arg_x.9'],
            'arg_x.10' => $_POST['arg_x.10'],
            'arg_x.11' => $_POST['arg_x.11'],
            'arg_x.12' => $_POST['arg_x.12'],
            'arg_x.13' => $_POST['arg_x.13'],
            'arg_x.14' => $_POST['arg_x.14'],
            'arg_x.15' => $_POST['arg_x.15'],
            'arg_x.16' => $_POST['arg_x.16'],
            'arg_x.17' => $_POST['arg_x.17'],
            'arg_x.18' => $_POST['arg_x.18'],
            'arg_x.19' => $_POST['arg_x.19'],
            'arg_x.20' => $_POST['arg_x.20'],
            'arg_x.21' => $_POST['arg_x.21'],
            'arg_x.22' => $_POST['arg_x.22'],
            'arg_x.23' => $_POST['arg_x.23'],
            'arg_x.24' => $_POST['arg_x.24'],
            'arg_x.25' => $_POST['arg_x.25'],
            'arg_x.26' => $_POST['arg_x.26'],
            'arg_x.27' => $_POST['arg_x.27'],
            'arg_x.28' => $_POST['arg_x.28'],
            'arg_x.29' => $_POST['arg_x.29'],
            'arg_x.30' => $_POST['arg_x.30'],
            'arg_x.31' => $_POST['arg_x.31'],
            'arg_x.32' => $_POST['arg_x.32'],
            'arg_x.33' => $_POST['arg_x.33'],
            'arg_x.34' => $_POST['arg_x.34'],
            'arg_x.35' => $_POST['arg_x.35'],
            'arg_x.36' => $_POST['arg_x.36'],
        ]
        
    );

    // STEP 3: Set the cURL options
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

    // Make a POST request
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
    $data = json_decode($response, true);

    // Check if the response was successful
    if (isset($data['0'])) {
        // API request was successful
        // Access the data returned by the API
        echo "The predicted soil type is:<br>";
        // Process the data
        foreach ($data as $repository) {
            echo $repository['0'], $repository['1'], $repository['2'], "<br>";
        }
    } else {
        // API request failed or returned an error
        // Handle the error appropriately
        echo "API Error: " . $data['message'];
    }
}

// Display the form
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soil type Prediction Form based on pixel band</title>
</head>
<body>

<h2>Soil type Prediction Form based on pixel band</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <!-- Add your form fields here --> Pixel Band 1: <input type="text" name="arg_x.1"><br>
Pixel Band 1: <input type="text" name="arg_x.1"><br>
Pixel Band 2: <input type="text" name="arg_x.2"><br>
Pixel Band 3: <input type="text" name="arg_x.3"><br>
Pixel Band 4: <input type="text" name="arg_x.4"><br>
Pixel Band 5: <input type="text" name="arg_x.5"><br>
Pixel Band 6: <input type="text" name="arg_x.6"><br>
Pixel Band 7: <input type="text" name="arg_x.7"><br>
Pixel Band 8: <input type="text" name="arg_x.8"><br>
Pixel Band 9: <input type="text" name="arg_x.9"><br>
Pixel Band 10: <input type="text" name="arg_x.10"><br>
Pixel Band 11: <input type="text" name="arg_x.11"><br>
Pixel Band 12: <input type="text" name="arg_x.12"><br>
Pixel Band 13: <input type="text" name="arg_x.13"><br>
Pixel Band 14: <input type="text" name="arg_x.14"><br>
Pixel Band 15: <input type="text" name="arg_x.15"><br>
Pixel Band 16: <input type="text" name="arg_x.16"><br>
Pixel Band 17: <input type="text" name="arg_x.17"><br>
Pixel Band 18: <input type="text" name="arg_x.18"><br>
Pixel Band 19: <input type="text" name="arg_x.19"><br>
Pixel Band 20: <input type="text" name="arg_x.20"><br>
Pixel Band 21: <input type="text" name="arg_x.21"><br>
Pixel Band 22: <input type="text" name="arg_x.22"><br>
Pixel Band 23: <input type="text" name="arg_x.23"><br>
Pixel Band 24: <input type="text" name="arg_x.24"><br>
Pixel Band 25: <input type="text" name="arg_x.25"><br>
Pixel Band 26: <input type="text" name="arg_x.26"><br>/
Pixel Band 27: <input type="text" name="arg_x.27/"><br>/
Pixel Band 28: <input type="text" name="arg_x.28"><br>
Pixel Band 29: <input type="text" name="arg_x.29"><br>
Pixel Band 30: <input type="text" name="arg_x.30"><br>
Pixel Band 31: <input type="text" name="arg_x.31"><br>
Pixel Band 32: <input type="text" name="arg_x.32"><br>
Pixel Band 33: <input type="text" name="arg_x.33"><br>
Pixel Band 34: <input type="text" name="arg_x.34"><br>
Pixel Band 35: <input type="text" name="arg_x.35"><br>
Pixel Band 35: <input type="text" name="arg_x.36"><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
