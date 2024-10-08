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

function function_math_avg(Parse $parse, Data $data, $array=[], $precision=0, $mode=PHP_ROUND_HALF_UP){
    if(is_string($mode)){
        $mode = constant($mode);
    }
    $count = 0;
    if(empty($array)){
        $result = $count;
    } else {
        foreach($array as $number){
            $count += $number;
        }
        $result = round(($count / count($array)), $precision, $mode);
    }
    return $result;
}