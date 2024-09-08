<?php

use Difference\Fun\Module\Data;
use Difference\Fun\Module\Dir;
use Difference\Fun\Module\File;
use Difference\Fun\Module\Parse;

function function_autoload_restart(Parse $parse, Data $data){
    $object = $parse->object();
    $object->config('ramdisk.is.disabled', true);
    $temp_dir = $object->config('framework.dir.temp');
    $dir = new Dir();
    $read = $dir->read($temp_dir, true);
    if($read){
        foreach($read as $file){
            if($file->type === Dir::TYPE){
                if(
                    (
                        stristr($file->url, strtolower(\Difference\Fun\Module\Autoload::NAME)) !== false ||
                        stristr($file->url, strtolower(\Difference\Fun\App::NAME)) !== false
                    )
                    &&
                    file_exists($file->url)
                ){
                    Dir::remove($file->url);
                    echo 'Removed: ' . $file->url . PHP_EOL;
                }
            }
        }
    }
}
