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

function function_string_newline_to_break(Parse $parse, Data $data, $string='', $is_xhtml=true){
    $result = nl2br($string, $is_xhtml);
    return $result;
}
