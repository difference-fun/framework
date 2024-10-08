<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-13
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_route_get(Parse $parse, Data $data, $name=null, $options=[]){
    $object = $parse->object();
    return $object->route()::find($object, $name, $options);
}
