<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 21:03
 */

namespace Common\Strategy;


class FemaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        // TODO: Implement showAd() method.
        echo '女性广告';
    }

    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '女性服装';
    }

}