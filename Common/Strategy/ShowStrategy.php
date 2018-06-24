<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 21:08
 */

namespace Common\Strategy;



class ShowStrategy
{
    /**
     * @var  UserStrategy
     */
    protected $strategy;


    public function setStrategy(UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function index(){
        $this->strategy->showAd();
        $this->strategy->showCategory();
    }

}