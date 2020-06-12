<?php
namespace services;

class Autoloader
{ 

    public function loadClass(string $classname) {
        var_dump($classname);
            $filename = $_SERVER['DOCUMENT_ROOT'] . '/'.str_replace('\\','/',$classname). ".php";
            if (file_exists($filename)) {
                require realpath($filename);;
                return true;
            }
        return false;
    }
}