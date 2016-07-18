<?php

namespace App\Http\Controllers;

use App\Post;

class AdminController extends Controller{
    public function getIndex(){
        $posts = Post::paginate(2);
        return View('admin/index', ['posts' => $posts]);
    }
    
     public function getAllPosts(){
        $posts = Post::paginate(4);
        return View('admin/blog/index', ['posts' => $posts]);
    }
}

?>