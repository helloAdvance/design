<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 23:21
 */

namespace Common\Observer;


/**
 * 事件发生者
 * Class EventGenerator
 * @package Common\Observer
 */
abstract class EventGenerator
{
    private $observers = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

}