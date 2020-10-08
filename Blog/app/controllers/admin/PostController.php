<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogPost;
use Sirius\Validation\Validator;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


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
        $errors =[];
        $result = false;

        $validator = new Validator();
        $validator->add('title','required');
        $validator->add('content','required');

        if ($validator->validate($_POST)){
            $blogPost = new BlogPost([
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ]);
            if ($_POST['img']){
                $blogPost->img_url = $_POST['img'];
            }

            $blogPost->save();
            $result = true;
        }   else{
            $errors = $validator->getMessages();
        }

        return $this->render('admin/insert-post.twig',[
        'result'=> $result,
        'errors'=> $errors
        ]);

    }
    public function getDetails ($id)
    {
        $detailsPost = BlogPost::find($id);

        if (empty($detailsPost)) {
            return $this->render('errors/404.twig');
        } else {
            return $this->render('post/post-details.twig', ['details' => $detailsPost]);
        }
    }

}