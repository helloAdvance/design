<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 12:27
 */


define('BASEDIR', __DIR__ . '/..');

include_once BASEDIR . '/Common/Loader.php';


spl_autoload_register('\\Common\\Loader::autoload');

$dbMysqli = \Common\Tool\Factory::createDatabase('MySqli');
//var_dump($dbMysqli);
$dbMysqli2 = \Common\Tool\Factory::createDatabase('MySqli');
//var_dump($dbMysqli2);

//$dbMysqli->connect('192.168.10.10', 'homestead', 'secret', 'tom');
//$res = $dbMysqli->query('select * from test');
//$dbMysqli->close();
//var_dump($res->fetch_assoc());

/*******************策略模式*******************/
//将一组特定的行为和算法封装成类，以适应特定的上下文环境，这种模式就是策略模式
//将分支判断提取到类的外面 提供一个setStrategy(接口)方法供外界设置
$sex = 'female';
if ($sex == 'female') {
    $strategy = new \Common\Strategy\FemaleUserStrategy();
} else {
    $strategy = new \Common\Strategy\MaleStrategy();
}

$page = new \Common\Strategy\ShowStrategy();

$page->setStrategy($strategy);
$page->index();
/*******************策略模式*******************/
echo '<br/>';echo '<br/>';echo '<br/>';
/*******************观察者*******************/
$observer1 = new  \Common\Observer\Observer1();
$observer2 = new  \Common\Observer\Observer2();
$event = new  \Common\Observer\Event();
$event->addObserver($observer1);
$event->addObserver($observer2);
$event->trigger();

/*******************观察者*******************/

$arrays = [
    \Common\Observer\Observer1::class,
    \Common\Observer\Observer2::class,
];



var_dump($arrays);
foreach ($arrays as $class){
    var_dump(new $class);
}
