<?php

// membuat function validation tanpa reflection 
class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationExceptions("username is not set");
        } else if (!isset($request->password)) {
            throw new ValidationExceptions("password is not set");
        } else if (is_null($request->username)) {
            throw new ValidationExceptions("username is null");
        } else if (is_null($request->password)) {
            throw new ValidationExceptions("password is null");
        }
    }


    static function validateReflection($request) // tidak perlu menyebutkan tipe class nya
    {
        $reflection = new ReflectionClass($request); // reflection class bisa mendeteksi seluruh isi dari class atau object saat aplikasi sedang berjalan 
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC); // mengambil semua data property
        foreach ($properties as $property) { // perulangan untuk mengecek sudah di inisialisasi atau belum 
            if (!$property->isInitialized($request)) {
                throw new ValidationExceptions("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationExceptions("$property->name is null ");
            }
        }
    }
}