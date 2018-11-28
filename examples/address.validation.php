<?php

ini_set("display_errors", true);
ini_set("error_reporting", -1);

require '../vendor/autoload.php';

$api = new Foxentry\Foxentry;
$api->setApiKey("fox-IcNXuaeXfcpaXncTmLFS");

$api->address->setQuery(array(
    "streetWithNumber" => "Jeseniova 1151",  // alternatively split to "street" and "streetNumber" parameters
    "city" => "Praha",
    "zip" => "13000"
));

$api->address->validate();

$validationResult = $api->getResult();
$creditsUsage     = $api->getCreditsUsage();	

print_r($validationResult);
print_r($creditsUsage);

// RESULTS PRINT
if ($validationResult->valid) {
	echo "Address is valid.<br>\n";
}
else {
	echo "Address is invalid.<br>\n";
}

?>