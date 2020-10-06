<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PostController extends BaseController {
    public function getIndex(){
        //admin/post or admin/post/index
        global $pdo;
        $query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC ');
        $query->execute();

        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $this->render('admin/post.twig',['blogPosts' => $blogPosts]);
    }

    public function getCreate (){
        //admin/post/create
        return $this->render('admin/insert-post.twig');
    }
    public function postCreate (){

        global $pdo;
        $sql = 'INSERT INTO blog_posts(title, content) VALUES(:title,:content)';
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'title' => $_POST['title'],
            'content' => $_POST['content']
        ]);

        return $this->render('admin/insert-post.twig',['result'=>$result]);
    }
}