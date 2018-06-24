<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 18:49
 */

namespace Common\Tool;


class Register
{
    protected static $objects = [];

    /**
     * 注册树
     * @param $alias
     * @param $obj
     */
    public static function set($alias, $obj)
    {
        self::$objects[$alias] = $obj;
    }

    /**
     * 获取一个对象
     * @param $alias
     * @return mixed|null
     */
    public static function get($alias)
    {
        return array_key_exists($alias, self::$objects) ? self::$objects[$alias] : null;
    }

    /**
     * 销毁一个对象
     * @param $alias
     */
    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}