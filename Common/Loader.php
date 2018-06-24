<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 12:46
 */

namespace Common;


class Loader
{
    public static function autoload($class)
    {

        require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';

    }
}