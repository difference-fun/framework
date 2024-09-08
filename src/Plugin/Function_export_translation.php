<?php
/**
 * @author          Remco van der Velde
 * @since           2021-03-05
 */
use Difference\Fun\App;
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Module\Core;
use Difference\Fun\Module\Dir;
use Difference\Fun\Module\File;

function function_export_translation(Parse $parse, Data $data, $type='object'){
    $object = $parse->object();
    $url = $object->config('controller.dir.data') . $object->config('dictionary.translation') . $object->config('ds');
    $dir = new Dir();
    $read = $dir->read($url);
    if($object->config('project.log.name')){
        $object->logger($object->config('project.log.name'))->info('export translation directory: ' . $url);
    }
    $export = new Data();
    if($read){
        foreach($read as $nr => $file){
            $file->basename = File::basename($file->name, $object->config('extension.json'));
            $export->data(
                'translation.' . strtolower($file->basename),
                $object->data('translation.' . strtolower($file->basename))
            );
        }
    }
    return Core::object($export->data(), $type);
}
