<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-18
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_microtime(Parse $parse, Data $data, $get_as_float=false){
    if(empty($get_as_float)){
        $result = microtime(false);
    } else {
        $result = microtime(true);
    }
    return $result;
}
