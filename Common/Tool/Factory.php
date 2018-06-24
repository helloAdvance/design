<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 18:34
 */

namespace Common\Tool;


use Common\DB\MySqli;

class Factory
{
    protected static $_instance;

    public static function createDatabase($type)
    {
        switch ($type) {
            case 'MySqli' :
                if (Register::get('MySqli')) {
                    return (Register::get('MySqli'));
                }
                $dbMysqli = new  MySqli();
                Register::set('MySqli', $dbMysqli);
                return $dbMysqli;
                break;
            default :
                if (Register::get('MySqli')) {
                    return (Register::get('MySqli'));
                }
                $dbMysqli = new  MySqli();
                Register::set('MySqli', $dbMysqli);
                return $dbMysqli;
                break;
        }

    }

}