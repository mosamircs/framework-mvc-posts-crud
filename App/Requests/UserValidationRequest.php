<?php
namespace App\Requests;
class UserValidationRequest
{
    public function __construct()
    {
        return [
            'name'=>"required",
            'email'=>"required",
            'password'=>"required"
        ];
    }
}