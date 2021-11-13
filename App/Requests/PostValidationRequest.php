<?php
namespace App\Requests;
class PostValidationRequest
{
    public function __construct()
    {
        return [
            'title'=>"required",
            'user_id'=>"required"
        ];
    }
}