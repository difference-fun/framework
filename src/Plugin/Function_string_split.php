<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-16
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_string_split(Parse $parse, Data $data, $string='', $length=null){
    if(empty($length)){
        $result = mb_str_split($string);
    } else {
        $result = mb_str_split($string, $length);
    }
    return $result;
}
