<?php

require_once "exceptions/ValidationExceptions.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

// try catch exceptions untuk menghandle error
try {
    validateLoginRequest($loginRequest);
}
// multiply try catch untuk menangani error pada berbagai kondisi
catch (ValidationExceptions $exceptions) {
    echo "Validation Error: {$exceptions->getMessage()}" . PHP_EOL;
} catch (Exception $exceptions) {
    echo "Error: {$exceptions->getMessage()}" . PHP_EOL;
    echo $exceptions->getTraceAsString(); // untuk mendebug error
} finally {
    echo "ERROR ATAUPUN TIDAK, PASTI AKAN DIEKSEKUSI";
}