<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-30
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_string_sha1(Parse $parse, Data $data, $string='', $raw_output=false){
    $result = sha1($string, $raw_output);
    return $result;
}
