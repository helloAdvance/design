<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 21:05
 */

namespace Common\Strategy;


class MaleStrategy implements UserStrategy
{
    public function showAd()
    {
        // TODO: Implement showAd() method.
        echo '男性广告';
    }

    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '男性服装';
    }

}