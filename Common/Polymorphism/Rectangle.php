<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 23:15
 */

namespace Common\Polymorphism;


class Rectangle extends Polygon
{
    public function draw()
    {
//        parent::draw(); // TODO: Change the autogenerated stub
        echo '我画长方形。';
    }

}