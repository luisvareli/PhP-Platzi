<?php

namespace App\Controllers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig;

class BaseController {
    protected $templateEngine;

    public function __construct()
    {
        $loader = new FilesystemLoader('../views');
        $this->templateEngine = new Environment($loader,[
            'debug' => true,
            'cache' => false
        ]);
        $this->templateEngine->addFilter(new Twig\TwigFilter('url', function ($path){
            return BASE_URL . $path;
        }));
    }

    public function render($fileName, $data = []){
        return $this->templateEngine->render($fileName, $data);
    }
}