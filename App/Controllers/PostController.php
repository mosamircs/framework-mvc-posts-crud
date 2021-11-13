<?php
namespace App\Controllers;
use App\Models\Post;
use App\Core\View;
class PostController
{
    public $title;
    public $body;
    public $user_id;
    public $data=[];
    public function __construct($params=[])
    {
        $this->title = $params['title'];
        $this->body = $params['body'];
        $this->user_id = $params['user_id'];
        $this->data = [$this->title,$this->body,$this->user_id];
 
    }
    /**
     * read all posts from database and returns it
     */
    public function index()
    {
        return View::render('index',$this->data);
    }
    
    /**
     * create new instance record in the database
     * @param Post $post
     */
    public function store()
    {
        Post::create();
    }
}