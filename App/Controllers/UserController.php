<?php
namespace App\Controllers;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use App\Core\View;
use App\Models\User;
class UserController
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $userPosts  = new User();
        View::render('index', ['data' => 'this is my data coming form view render']);
        return  $userPosts->posts();
    }

}