<?php
# *****************************************************************************

// ... (Previous PHP code remains unchanged)

// STEP 1: Set the API endpoint URL
$apiUrl = 'http://127.0.0.1:5022/Satellite';

// Initiate a new cURL session/resource
$curl = curl_init();

// STEP 2: Set the values of the parameters to pass to the model ----

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $arg_x_1 = $_POST["arg_x_1"];
    $arg_x_2 = $_POST["arg_x_2"];
    $arg_x_3 = $_POST["arg_x_3"];
    $arg_x_4 = $_POST["arg_x_4"];
    $arg_x_5 = $_POST["arg_x_5"];
    $arg_x_6 = $_POST["arg_x_6"];
    $arg_x_7 = $_POST["arg_x_7"];
    $arg_x_8 = $_POST["arg_x_8"];
    $arg_x_9 = $_POST["arg_x_9"];
    $arg_x_10 = $_POST["arg_x_10"];
    $arg_x_11 = $_POST["arg_x_11"];
    $arg_x_12 = $_POST["arg_x_12"];
    $arg_x_13 = $_POST["arg_x_13"];
    $arg_x_14 = $_POST["arg_x_14"];
    $arg_x_15 = $_POST["arg_x_15"];
    $arg_x_16 = $_POST["arg_x_16"];
    $arg_x_17 = $_POST["arg_x_17"];
    $arg_x_18 = $_POST["arg_x_18"];
    $arg_x_19 = $_POST["arg_x_19"];
    $arg_x_20 = $_POST["arg_x_20"];
    $arg_x_21 = $_POST["arg_x_21"];
    $arg_x_22 = $_POST["arg_x_22"];
    $arg_x_23 = $_POST["arg_x_23"];
    $arg_x_24 = $_POST["arg_x_24"];
    $arg_x_25 = $_POST["arg_x_25"];
    $arg_x_26 = $_POST["arg_x_26"];
    $arg_x_27 = $_POST["arg_x_27"];
    $arg_x_28 = $_POST["arg_x_28"];
    $arg_x_29 = $_POST["arg_x_29"];
    $arg_x_30 = $_POST["arg_x_30"];
    $arg_x_31 = $_POST["arg_x_31"];
    $arg_x_32 = $_POST["arg_x_32"];
    $arg_x_33 = $_POST["arg_x_33"];
    $arg_x_34 = $_POST["arg_x_34"];
    $arg_x_35 = $_POST["arg_x_35"];
    $arg_x_36 = $_POST["arg_x_36"];
    

    // Update the cURL parameters
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

    // Set the cURL options
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $apiUrl = $apiUrl . '?' . http_build_query($params);
    curl_setopt($curl, CURLOPT_URL, $apiUrl);

    // For testing:
    // echo "The generated URL sent to the API is:<br>" . $apiUrl . "<br><br>";

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
    $data = json_decode($response, true);

    // Check if the response was successful
    if (isset($data['0'])) {
        // API request was successful
        // Access the data returned by the API
        $predictedSoilType = "The predicted soil type is: ";

        // Process the data
        foreach ($data as $repository) {
            $predictedSoilType .= $repository['0'] . $repository['1'] . $repository['2'] . $repository['3'] . $repository['4'] . $repository['5'] . $repository['6'] . $repository['7'] ."<br>";
        }
    } else {
        // API request failed or returned an error
        // Handle the error appropriately
        $predictedSoilType = "API Error: " . $data['message'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soil type Prediction Form based on pixel band</title>
    <style>
        body {
            background-image: url('https://source.unsplash.com/1920x1080/?satellite');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            
            color: #fff;
            margin-bottom: 900px;

        }
        
        h3 {
            text-align: center;
            color: black;
            
            
        }

        form {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-right: 200px;
        }

        .form-row {
            display: flex;
            flex-direction: column;
            width: 20%;
            margin-bottom: 10px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>Soil type Prediction Form based on pixel band</h1>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <?php
    // Dynamically generate form fields with styles
    for ($i = 1; $i <= 36; $i++) {
        echo '<div class="form-row">
                  <label for="pixel_band_' . $i . '">Pixel Band ' . $i . ':</label>
                  <input type="text" id="pixel_band_' . $i . '" name="arg_x.' . $i . '" style="width: calc(50% - 5px); padding: 10px; margin-bottom: 10px; box-sizing: border-box; display: inline-block;">
              </div>';
    }
    ?>
    <input type="submit" value="Submit">

    <?php
// Display the predicted soil type
if (!empty($predictedSoilType)) {
    echo '<h3>' . $predictedSoilType . '</h3>';
}
?>
</form>


</body>
</html>


