<?php
/**
 * @author          Remco van der Velde
 * @since           2021-03-05
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

/**
 * @throws Exception
 */
function function_logger_info(Parse $parse, Data $data, $message=null, $context=[], $channel=''){
    $object = $parse->object();
    if(empty($channel)){
        $channel = $object->config('project.log.error');
    }
    if($channel){
        $object->logger($channel)->info($message, $context);
    }
}