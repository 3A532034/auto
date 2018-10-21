<?php
require '../vendor/autoload.php';
use \Demo\Helloworld as World;
use Demo\Hello\Lara;
use Demo\Hello;

$world = new World();
$lara = new Lara();
$vincent = new Hello\Someone('Vincent');

$mary =new \Demo\Hello\Someone('Mary');

/**
 * Created by PhpStorm.
 * User: Anriaru
 * Date: 2018/10/9
 * Time: 下午 10:21
 */