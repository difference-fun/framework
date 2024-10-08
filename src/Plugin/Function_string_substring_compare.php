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

function function_string_substring_compare(Parse $parse, Data $data, $string1='', $string2='', $offset=0, $length=null, $case_insensitive=false){
    if($length === null){
        $result = substr_compare($string1, $string2, $offset);
    } else {
        $result = substr_compare($string1, $string2, $offset, $length, $case_insensitive);
    }
    return $result;
}
