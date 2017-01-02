<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 02/01/17
 * Time: 07:59
 */

namespace DataFixtures;


class CategoryFixtures extends BaseFixtures
{
    public function getType(){
        return 'category';
    }

    public function getFixtures(){
        return array(
            array(
                'name' =>'CD'
            ),
            array(
                'name' =>'DVD'
            )
        );
    }

}