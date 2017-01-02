<?php
/**
 * User: jeff
 * Date: 26/12/16
 * Time: 16:59
 */
require_once '../core/bootstrap.php';
use RedBeanPHP\Facade as R;


$dispatcher = new \Services\Dispatcher();
$dispatcher->dispatch();


