<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 02/01/17
 * Time: 10:42
 */

namespace DataFixtures;

//use RedBeanPHP\Facade as R;

abstract class BaseFixtures
{

    public function loadFixtures(){
        $type = $this->getType();
        $fixtures = $this->getFixtures();

        foreach ($fixtures as $fixture){
            $repositoryClass = sprintf('\\Model\\%sRepository', ucfirst($type));
            $repository = new $repositoryClass();
            $repository->create($fixture);
        }
    }
}