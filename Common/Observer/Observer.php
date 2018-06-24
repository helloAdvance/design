<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 23:13
 */

namespace Common\Observer;


/**
 * 1. 观察者模式（ Observer ），当一个对象状态发生改变时，依赖它的对象全部会收到通知，并自动更新
 *  2. 场景：一个事件发生后，要执行一连串更新操作。传统的编程方式，就是在事件的代码之后直接加入处理逻辑。
 * 当更新的逻辑增多后，代码会变得难以维护。这种方式是耦合的，入侵式的，增加新的逻辑需要修改事件主体的代码
 * Class Observer
 * @package Common\Observer
 */

interface Observer
{
    public function update($event_info = null);
}