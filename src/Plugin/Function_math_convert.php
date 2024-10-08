<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-20
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_math_convert(Parse $parse, Data $data, $string='', $from=10, $to=10){
    //$from 2-10 a-z
    //$to 2-10 a-z
    $result = base_convert($string, $from, $to);
    return $result;
}
