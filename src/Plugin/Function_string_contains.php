<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-15
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_string_contains(Parse $parse, Data $data, $haystack='', $needle='', $before_needle=false){
    $result = strstr($haystack, $needle, $before_needle);
    return $result;
}
