<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 19:45
 */

namespace Common\DB;


class PDO implements DataBaseInterface
{
    /**
     * @var \PDO
     */
    protected  $conn;

    public function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = new \PDO("mysql:host = $host; dbname = $dbname",$user,$passwd);
        $this->conn = $conn;
    }


    public  function query($sql)
    {
        // TODO: Implement query() method.
        $this->conn->query($sql);
    }

    public  function close()
    {
        // TODO: Implement close() method.
        $this->conn = null;
    }
}