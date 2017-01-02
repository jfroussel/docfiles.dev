<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 02/01/17
 * Time: 19:33
 */

namespace Model;



class UserRepository extends BaseRepository
{

    const TYPE = 'user';

    public function getType(){
        return self::TYPE;
    }
}