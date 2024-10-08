<?php
/**
 * @author          Remco van der Velde
 * @since           2022-11-24
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_route_data(Parse $parse, Data $data, $attribute=null, $value=null){
    $object = $parse->object();
    if($attribute !== null){
        if(is_object($attribute)){
            $object->route()->data($attribute);
            return $object->route()->data();
        }
    }
}
