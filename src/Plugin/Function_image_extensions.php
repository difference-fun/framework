<?php
/**
 * @author          Remco van der Velde
 * @since           2022-03-17
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_image_extensions(Parse $parse, Data $data){
    $object = $parse->object();
    $contentType = $object->config('contentType');
    $list = [];
    if(
        is_array($contentType) ||
        is_object($contentType)
    ){
        foreach($contentType as $key => $value){
            if(stristr($value, 'image/') !== false){
               $list[] = $key;
            }
        }
    }
    return $list;
}
