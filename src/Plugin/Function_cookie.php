<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-18
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;
use Difference\Fun\Module\Core;

function function_cookie(Parse $parse, Data $data, $attribute=null, $value=null, $duration=null){
    if(
        is_string($attribute) &&
        substr($attribute, 0, 1) === '$'
    ){
        $attribute = substr($attribute, 1);
    }
    $object = $parse->object();
    if(!empty($parse->is_assign())){
        $cookie = $object->cookie($attribute, $value, $duration);
        return Core::object($cookie);
    } else {
        return $object->cookie($attribute, $value, $duration);
    }    
}
