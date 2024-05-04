<?php
require_once "data/LoginRequest.php";

function validateLoginRequest(LoginRequest $request)
{
    if(!isset($request->username)) {
        throw new ValidationExceptions("Username is null");
    }
    else if(!isset($request->password)) {
        throw new ValidationExceptions("password is null");
    }
    else if(trim($request->username) == "" ){
        throw new Exception("Username is empty");
    }
    else if(trim($request->password) == "" ){
        throw new Exception("password is empty");
    }
}