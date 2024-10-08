<?php
/**
 * @author          Remco van der Velde
 * @since           2020-09-24
 * @copyright       Remco van der Velde
 * @license         MIT
 * @version         1.0
 * @changeLog
 *     -            all
 */
use Difference\Fun\Module\Parse;
use Difference\Fun\Module\Data;

function function_preg_grep(Parse $parse, Data $data, $pattern=null, $input=[], $flags=0){
    if(is_string($flags)){
        $flags = constant($flags);
    }
    if($flags != 0){
        $result = preg_grep($pattern, $input, $flags);
    } else {
        $result = preg_grep($pattern, $input);
    }
    return $result;
}
