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

    public function __construct(){

        $this->parameters = $_GET;
        $this->viewer = new Viewer();
    }

    public function dispatch(){

        $parameters = $this->extractControllerAndActionParameters();
        $this->viewer->setParameters($parameters);
        $this->viewer->render();
    }

    private function extractControllerAndActionParameters(){
        if(!array_key_exists('controller', $this->parameters) && !array_key_exists('action', $this->parameters)){
            $controller = DEFAULT_CONTROLLER ;
            $action = DEFAULT_ACTION;
        }else{
            $controller = $this->parameters['controller'];
            $action = $this->parameters['action'];
        }
        return array($controller, $action);
    }

}