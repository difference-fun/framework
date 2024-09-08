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

function function_string_wrap_word(Parse $parse, Data $data, $string='', $width=75, $break="\n", $cut=false){
    $result = wordwrap($string, $width, $break, $cut);
    return $result;
}
