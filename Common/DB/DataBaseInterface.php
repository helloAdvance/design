<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 18:38
 */

namespace Common\DB;


Interface DataBaseInterface
{

    public  function connect($host,$user,$passwd,$dbname);
    public  function query($sql);
    public  function close();



}