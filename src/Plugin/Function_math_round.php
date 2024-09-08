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

function function_math_round(Parse $parse, Data $data, $float=null, $precision=0, $mode=PHP_ROUND_HALF_UP){
    if(is_string($mode)){
        $mode = constant($mode);
    }
    return round($float, $precision, $mode);
}
