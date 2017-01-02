<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 01/01/17
 * Time: 16:31
 */

namespace Model;
use RedBeanPHP\SimpleModel;

class BaseModel extends SimpleModel
{
    public $slug;
    public $ctime;
    public $mtime;


}