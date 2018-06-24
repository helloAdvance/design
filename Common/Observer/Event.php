<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 23:19
 */

namespace Common\Observer;


class Event extends EventGenerator
{
    public function trigger()
    {
//        echo 'event' ;
//        echo '逻辑1' ;
//        echo '逻辑2，业务2' ;
//        echo '逻辑3，业务3' ;
//        echo '逻辑4' ;
//        echo '逻辑5' ;
        $this->notify();
    }
}