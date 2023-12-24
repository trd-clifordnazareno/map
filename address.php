
<?php
// Create an associative array to be converted to JSON
$response = array('lat' => '10.29652', 'log' =>'123.90741');

// Set the content type to JSON
header('Content-Type: application/json');

// Output the JSON response
echo json_encode($response);
?>
