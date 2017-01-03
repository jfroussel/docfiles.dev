<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 02/01/17
 * Time: 20:30
 */

namespace Services;


class Dispatcher
{
    private $parameters;
    private $viewer;
    private $controller;
    private $action;

    public function __construct(){

        $this->parameters = $_GET;
        $this->viewer = new Viewer();
    }

    public function dispatch(){

        $viewParameters = $this->extractControllerAndActionParameters();
        $controllerParameters = $this->executeAction();
        $this->viewer
            ->setViewParameters($viewParameters)
            ->setControllerParameters($controllerParameters);
        $this->viewer->render();
    }

    private function extractControllerAndActionParameters(){
        if(!array_key_exists('controller', $this->parameters) && !array_key_exists('action', $this->parameters)){
            $this->controller = DEFAULT_CONTROLLER ;
            $this->action = DEFAULT_ACTION;
        }else{
            $this->controller = $this->parameters['controller'];
            $this->action = $this->parameters['action'];
        }

        return array($this->controller, $this->action);
    }

    public function executeAction(){
        $controllerClass = sprintf('\\Controller\\%sController', ucfirst($this->controller));
        if(!class_exists($controllerClass)){
            throw new \Exception("Class $controllerClass not found");
        }
        $controller = new $controllerClass();
        $action = sprintf('%sAction', $this->action);
        if(!method_exists($controller, $action)){
            throw new \Exception("Action $action not found on $controllerClass");
        }
        $this->cleanGetParameters();

        return call_user_func_array(array($controller, $action), $this->parameters);
    }

    public function cleanGetParameters(){
        switch (true){
            case array_key_exists('controller', $this->parameters);
                unset($this->parameters['controller']);
            case array_key_exists('action', $this->parameters);
                unset($this->parameters['action']);
        }

    }

}