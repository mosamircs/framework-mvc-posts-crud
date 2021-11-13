<?php
namespace App\Models;

use App\Core\Database;

class Model extends Database
{
    /**
     * select all  from database on specific table 
     */
    public static function  all()
    {
        //1- define sql query
        $sql = "SELECT * FROM users";

        // 2- get instance of Database
        return  self::getInstanceDatabase()->query($sql)->fetchAll();
    }

    /**
     * relation (one to many) [user has many posts]
     */
    public static function hasMany($tableName)
    {
        //1- make sql query for relation between posts and users
        $sql = "SELECT *
        FROM users
        INNER  JOIN posts
        ON users.id = posts.id";
        
        //2- get instance of Database and excure query 
        return self::getInstanceDatabase()->query($sql)->fetchAll();
    }
}