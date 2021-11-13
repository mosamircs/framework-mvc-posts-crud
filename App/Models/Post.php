<?php
namespace App\Models;
use App\Models\Model;
class Post extends Model
{
    /**
     * proprerties of Post Mdoel
     */

    public $id;
    public $title;
    public $body;
    public $user_id;

    /**constructor 
     * intialize data form object creation 
     */
    public function __construct($params = [])
    {
        $this->id = $params['id'];   
        $this->title = $params['title'];
        $this->body = $params['body'];
        $this->user_id =$params['user_id'];  
    }
    public static  function create()
    {
        $sql = "INSERT INTO posts (id,title,body,user_id) VALUES (:id,:title,:body,:user_id) ";
        self::getInstanceDatabase()->query($sql);
    }   
}