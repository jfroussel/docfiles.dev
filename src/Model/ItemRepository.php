<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 02/01/17
 * Time: 19:33
 */

namespace Model;



class ItemRepository extends BaseRepository
{

    const TYPE = 'item';

    public function getType(){
        return self::TYPE;
    }
}