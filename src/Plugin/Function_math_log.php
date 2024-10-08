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

function function_math_log(Parse $parse, Data $data, $float=null, $base=M_E){
    if(is_string($base)){
        $base = constant($base);
    }
    $result = log($float, $base);
    return $result;
}
