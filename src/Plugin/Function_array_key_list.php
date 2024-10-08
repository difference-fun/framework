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

function function_array_key_list(Parse $parse, Data $data, $array=[], $search=null, $strict=false){
    if($search === null){
        $result = array_keys($array);
    } else {
        $result = array_keys($array, $search, $strict);
    }
    return $result;
}
