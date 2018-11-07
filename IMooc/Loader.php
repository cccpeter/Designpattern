<?php
namespace Imooc;
class Loader{
    static function autoload($class){
        BASEDIR.'/'.str_replace('\\','/',$class).'.php';
        var_dump($class);
    }
}