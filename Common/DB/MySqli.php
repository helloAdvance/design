<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 19:45
 */

namespace Common\DB;


class MySqli implements DataBaseInterface
{
    protected  $conn;


    public  function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn = $conn;
    }

    public  function query($sql)
    {
        // TODO: Implement query() method.
        return mysqli_query($this->conn,$sql);
    }

    public  function close()
    {
        // TODO: Implement close() method.
        mysqli_close($this->conn);
    }
}