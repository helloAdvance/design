<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 23:17
 */

namespace Common\Polymorphism;


class Teacher
{

    public function drawPolygon(Polygon $polygon){
        $polygon->draw();
    }
}