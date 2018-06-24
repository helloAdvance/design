<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 19:44
 */

namespace Common\DB;


class MySql implements DataBaseInterface
{
    protected $conn ;
    public function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.

        $conn = mysql_connect($host, $user, $passwd, $dbname);
        mysql_select_db($dbname, $conn);
        $this->conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        return mysql_query($sql,$this->conn);
    }

    public function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}