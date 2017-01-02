<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 02/01/17
 * Time: 21:18
 */

namespace Services;


class Viewer
{
    private $viewPath;
    private $parameters;

    public function setParameters($parameters){
        $this->parameters = $parameters;
    }
    public function render(){
        $this->createPath();
        echo file_get_contents($this->viewPath);
    }

    public function createPath(){
        list($controller, $action) = $this->parameters;
        $viewPathString = sprintf('../src/Views/%s/%s.html', $controller, $action);
        if(!file_exists($viewPathString)) {
            throw new \Exception("View $viewPathString not found ");
        }
        $this->viewPath = $viewPathString;
    }

}