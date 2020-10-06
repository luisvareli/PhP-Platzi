<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogPost;

class PostController extends BaseController {
    public function getIndex(){
        //admin/post or admin/post/index
        $blogPosts = BlogPost::all();
        return $this->render('admin/post.twig',['blogPosts' => $blogPosts]);
    }

    public function getCreate (){
        //admin/post/create
        return $this->render('admin/insert-post.twig');
    }
    public function postCreate (){
        $blogPost = new BlogPost([
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ]);
        $blogPost->save();

        $result = true;

        return $this->render('admin/insert-post.twig',['result'=>$result]);
    }
}