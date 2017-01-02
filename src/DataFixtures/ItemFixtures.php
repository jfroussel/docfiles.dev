<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 02/01/17
 * Time: 07:59
 */

namespace DataFixtures;


class ItemFixtures extends BaseFixtures
{
    public function getType(){
        return 'item';
    }

    public function getFixtures(){
        return array(
            array(
                'title' =>'le pont',
                'author' =>'jeff roussel',
                'editor' =>'paramount',
                'releasedAt' =>'2009',
                'gender' =>'sf',
                'support' =>'CD'
            ),
            array(
                'title' =>'evasion',
                'author' =>'jc',
                'editor' =>'warner',
                'releasedAt' =>'2019',
                'gender' =>'sf',
                'support' =>'CD'
            ),
            array(
                'title' =>'un autre monde',
                'author' =>'james cameron',
                'editor' =>'paramount',
                'releasedAt' =>'2010',
                'gender' =>'fantastic',
                'support' =>'DVD'
            ),
        );
    }

}