<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 20:13
 */

namespace Common\Tool;


class Singleton
{
    private static $_instance;

    //私有化构造方法，禁止外部实例化对象
    private function __construct()
    {
    }

    //私有化__clone，防止对象被克隆
    private function __clone()
    {
    }

    /**
     * 获取单例实例
     * @return Singleton
     */
    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {

            self::$_instance = new self;

        }
        return self::$_instance;
    }
}