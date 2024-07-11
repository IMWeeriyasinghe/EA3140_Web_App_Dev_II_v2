<?php

namespace App\Core;

class App{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        // print_r($url); // Printing the URL on the UI

        if(isset($url[0]) && file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')){
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }
        
        // Include the controller file
        require_once '../app/controllers/' . $this->controller . '.php'; 
        
        // Create the controller instance with the full namespace
        $controllerClass = "App\\Controllers\\" . $this->controller;
        $this->controller = new $controllerClass;

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
                
            }
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
        
        // print_r($url); // Printing the URL on the UI
    }

    public function parseUrl()
    {
        if(isset($_GET['url'])){
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
