<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 12:33
 */

namespace Common;


class BaseObject
{
    protected $array = [];

    public function __set($key, $value)
    {
        // TODO: Implement __set() method.
        $this->array[$key] = $value;
    }

    public function __get($key)
    {

        // TODO: Implement __get() method.
        return array_key_exists($key, $this->array) ? $this->array[$key] : null;
    }

    /**
     * 方法不存在是返回信息。
     * @param $func
     * @param $arguments
     * @return string
     */
    public function __call($func, $arguments)
    {
        // TODO: Implement __call() method.
//        var_dump($func,$arguments);
        var_dump("call:方法:$func 不存在");

    }

    /**
     *静态方法不存在的时候。
     * @param $func
     * @param $arguments
     */
    public static function __callStatic($func, $arguments)
    {
        // TODO: Implement __callStatic() method.
        var_dump("callStatic:静态方法:$func 不存在");
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
//        var_dump('类不能当做字符串使用:' . __CLASS__);
        return 'toString:类不能当做字符串使用:' . __CLASS__;
    }

    /**
     * @param $param
     * @return string
     */
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return "invoke:类不能当做函数使用.";
    }
}