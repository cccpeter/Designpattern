<?php

define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\Imooc\\Loader::autoload');
IMooc\Object::test();
App\Controller\Home\Index::test();