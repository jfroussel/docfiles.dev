<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 02/01/17
 * Time: 08:05
 */
require_once __DIR__.'../../../core/bootstrap.php';


$className = $argv[1];

$classFixtures = sprintf('\\DataFixtures\\%sFixtures', ucfirst($className));
$objectFixtures = new $classFixtures();

$objectFixtures->loadFixtures();

