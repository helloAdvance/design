<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 23:33
 */

namespace Common\Observer;


class Observer2 implements Observer
{
    public function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo '业务逻辑2';
    }
}