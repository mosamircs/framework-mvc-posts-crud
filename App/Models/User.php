<?php
namespace App\Models;

use App\Core\Database;
use App\Models\Model;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class User extends Model
{
    /**
     * user properties
     */
    public $id;
    public $name;
    public $age;

    /**
     * constructor intialize data record for user
     */
    public function __construct()
    {
        Database::getInstanceDatabase();
    }

    /***
     * relation has many posts 
     */
    public function posts()
    {
        return self::hasMany('posts');
    }
}