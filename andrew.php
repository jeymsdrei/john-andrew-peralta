<?php
// Read the JSON file
$jsonData = file_get_contents("dataset.json");

// Convert JSON to PHP array
$data = json_decode($jsonData, true);

// Initialize counter
$maleCount = 0;

// Loop through the list
foreach ($data as $person) {
    if (isset($person['gender']) && $person['gender'] === famaMale") {
        $maleCount++;
    }
}

// Print the result
echo "Total number of males: " . $maleCount;
?>