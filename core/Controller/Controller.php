<?php

namespace Core\Controller;

class Controller{

    protected $viewPath;
    protected $template;
    

    protected function render($view, $variables = []){
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . $this->template . '.php');
    }

    protected function forbidden(){
        $categories = $this->Category->all();
        $this->render("posts.Interdit", compact('categories'));
        die();
    }

    protected function notFound(){
        $categories = $this->Category->all();
        $this->render('posts.Error', compact('categories'));
        die();
    }

}