<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 02/01/17
 * Time: 07:59
 */

namespace DataFixtures;


class UserFixtures extends BaseFixtures
{
    public function getType(){
        return 'user';
    }

    public function getFixtures(){
        return array(
            array(
                'firstname' => 'jeff',
                'lastname' => 'roussel',
                'username' => 'jeffroussel',
                'password' => '1234'
            ),
            array(
                'firstname' => 'bill',
                'lastname' => 'gates',
                'username' => 'billgates',
                'password' => '1234'
            ),
            array(
                'firstname' => 'steve',
                'lastname' => 'job',
                'username' => 'stevejob',
                'password' => '1234'
            ),
        );
    }

}