<?php

use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Config;
use Difference\Fun\Module\Dir;
use Difference\Fun\Module\File;

function function_binary_create(Parse $parse, Data $data, $name=null){
    $id = posix_geteuid();
    if(
        !in_array(
            $id,
            [
                0
            ],
            true
        )
    ){
        throw new Exception('Only root can execute bin...');
    }
    if(empty($name)){
        $name = \Difference\Fun\Cli\Bin\Controller\Bin::DEFAULT_NAME;
    }
    $object = $parse->object();
    $execute = $object->config(Config::DATA_PROJECT_DIR_BINARY) . \Difference\Fun\Cli\Bin\Controller\Bin::EXE;
    Dir::create($object->config(Config::DATA_PROJECT_DIR_BINARY), Dir::CHMOD);
    $dir = Dir::name(\Difference\Fun\Cli\Bin\Controller\Bin::DIR) .
        $object->config(
            Config::DICTIONARY .
            '.' .
            Config::DATA
        ) .
        $object->config('ds');
    $source = $dir . \Difference\Fun\Cli\Bin\Controller\Bin::EXE;      
    if(File::exist($execute)){
        File::delete($execute);
    }    
    File::copy($source, $execute);
    $url_binary = $object->config(Config::DATA_PROJECT_DIR_BINARY) . \Difference\Fun\Cli\Bin\Controller\Bin::BINARY;
    File::write($url_binary, $name . PHP_EOL);
    $url = \Difference\Fun\Cli\Bin\Controller\Bin::TARGET . $name;
    $content = [];
    $content[] = '#!/bin/bash';
    # added $name as this was a bug in updating the cms
    $content[] = '_=' . $name . ' php ' . $execute . ' "$@"';
    $content = implode(PHP_EOL, $content);
    File::write($url, $content);
    shell_exec('chmod +x ' . $url);
    echo 'Binary created...' . PHP_EOL;
}
