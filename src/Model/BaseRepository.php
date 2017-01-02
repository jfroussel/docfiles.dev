<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 02/01/17
 * Time: 19:34
 */

namespace Model;

use RedBeanPHP\Facade as R;


abstract class BaseRepository
{
    abstract function getType();

    public function create($data){

        $object = R::dispense($this->getType());
        foreach ($data as $property => $value){
            $object->$property = $value;
        }
        R::store($object);
    }

}