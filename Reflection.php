<?php

require_once "exceptions/ValidationExceptions.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Rizqi";
$request->password = "yy";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);
