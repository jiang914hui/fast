<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 11:00
 */
spl_autoload_register(function ($class) {
    $class_path = str_replace('\\',DIRECTORY_SEPARATOR,$class);
    $file = DOCUMENT_ROOT . $class_path.'.php';
    if (file_exists($file)) {
        require_once($file);
        if (class_exists($class, false)) {
            return true;
        }
        return false;
    }
    return false;
});